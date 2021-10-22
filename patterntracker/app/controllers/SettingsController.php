<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2021 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\controllers;

use app\components\analytics\Analytics;
use app\components\console\Console;
use app\helpers\ArrayHelper;
use app\helpers\FileHelper;
use app\helpers\FormBuilderUpdater;
use app\helpers\MailHelper;
use app\helpers\SlugHelper;
use app\models\Form;
use app\models\FormConfirmation;
use app\models\FormData;
use app\models\FormEmail;
use app\models\FormRule;
use app\models\FormUI;
use app\models\Template;
use Carbon\Carbon;
use Swift_Mailer;
use Swift_SmtpTransport;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\HtmlPurifier;
use yii\helpers\Json;
use yii\validators\FileValidator;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * Class SettingsController
 * @package app\controllers
 */
class SettingsController extends Controller
{

    public $defaultAction = 'site';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    ['actions' => ['site', 'form', 'logo-delete'], 'allow' => true, 'roles' => ['configureSite']],
                    ['actions' => ['mail'], 'allow' => true, 'roles' => ['configureMailServer']],
                    ['actions' => ['tools'], 'allow' => true, 'roles' => ['accessPerformanceTools']],
                    ['actions' => ['import-export'], 'allow' => true, 'roles' => ['migrateData']],
                ],
            ],
        ];
    }

    /**
     * @param \yii\base\Action $action
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        // your custom code here, if you want the code to run before action filters,
        // which are triggered on the [[EVENT_BEFORE_ACTION]] event, e.g. PageCache or AccessControl

        @ini_set('memory_limit', '1024M');
        @set_time_limit(0);

        if (!parent::beforeAction($action)) {
            return false;
        }

        // other custom code here

        return true; // or false to not run the action
    }

    /**
     * Update App Settings
     *
     * @return string
     */
    public function actionSite()
    {

        $this->layout = 'admin'; // In @app/views/layouts

        $request = Yii::$app->request;
        $settings = Yii::$app->settings;
        if ($request->post()) {
            // Remove all illegal characters from name
            $appName = HtmlPurifier::process($request->post('app_name', $settings->get('app.name')));
            $settings->set('app.name', $appName);
            $appDescription = HtmlPurifier::process($request->post('app_description', $settings->get('app.description')));
            $settings->set('app.description', $appDescription);

            // Date / Time Formats
            $timeFormat = $request->post('app_timeFormat');
            $dateFormat = $request->post('app_dateFormat');
            $dateTimeFormat = $request->post('app_dateTimeFormat');
            $settings->set('app.timeFormat', $timeFormat);
            $settings->set('app.dateFormat', $dateFormat);
            $settings->set('app.dateTimeFormat', $dateTimeFormat);
            $humanTimeDiff = $request->post('app_humanTimeDiff', null);
            $settings->set('app.humanTimeDiff', is_null($humanTimeDiff) ? 0 : 1);

            // Membership
            $anyoneCanRegister = $request->post('app_anyoneCanRegister', null);
            $useCaptcha = $request->post('app_useCaptcha', null);
            $settings->set('app.anyoneCanRegister', is_null($anyoneCanRegister) ? 0 : 1);
            $settings->set('app.useCaptcha', is_null($useCaptcha) ? 0 : 1);
            $settings->set('app.defaultUserRole', $request->post('app_defaultUserRole', $settings->get('app.defaultUserRole')));
            $settings->set('app.defaultUserTimezone', $request->post('app_defaultUserTimezone', $settings->get('app.defaultUserTimezone')));
            $settings->set('app.defaultUserLanguage', $request->post('app_defaultUserLanguage', $settings->get('app.defaultUserLanguage')));

            // Log In
            $twoFactorAuthentication = $request->post('app_twoFactorAuthentication', null);
            $unconfirmedEmailLogin = $request->post('app_unconfirmedEmailLogin', null);
            $settings->set('app.twoFactorAuthentication', is_null($twoFactorAuthentication) ? 0 : 1);
            $settings->set('app.unconfirmedEmailLogin', is_null($unconfirmedEmailLogin) ? 0 : 1);
            $settings->set('app.maxPasswordAge', strip_tags($request->post('app_maxPasswordAge', $settings->get('app.maxPasswordAge'))));

            // REST API
            $restApi = $request->post('app_restApi', null);
            $restApiKey = $request->post('app_restApiKey', null);
            $settings->set('app.restApi', is_null($restApi) ? 0 : 1);
            $settings->set('app.restApiKey', is_null($restApiKey) ? 0 : 1);

            // Logo
            $image = UploadedFile::getInstanceByName('logo');
            if ($image) {
                $fileValidator = new FileValidator(['extensions' => 'png, jpg, jpeg, gif, svg', 'mimeTypes' => 'image/png, image/jpeg, image/gif, image/svg', 'maxFiles' => 1]);
                if ($fileValidator->validate($image, $error)) {
                    $logoDir = 'app/site';
                    $oldImage = $settings->get('app.logo');
                    $newImage = $logoDir . '/' . $image->baseName . '.' . $image->extension;
                    if (!empty($oldImage) && Yii::$app->fs->has($oldImage)) {
                        Yii::$app->fs->delete($oldImage);
                    }
                    if (!empty($newImage) && Yii::$app->fs->has($newImage)) {
                        Yii::$app->fs->delete($newImage);
                    }
                    if (FileHelper::save($newImage, $image->tempName)) {
                        $settings->set('app.logo', $newImage);
                    }
                }
            }

            // Show success alert
            Yii::$app->getSession()->setFlash(
                'success',
                Yii::t('app', 'The site settings have been successfully updated.')
            );
        }

        return $this->render('site');
    }

    public function actionMail()
    {

        $this->layout = 'admin'; // In @app/views/layouts

        $request = Yii::$app->request;
        $settings = Yii::$app->settings;

        if ($post = $request->post()) {

            try {

                if (isset($post['action']) && $post['action'] === 'test-email') {

                    // Remove all illegal characters from email
                    $toEmail = $request->post('email');
                    $toEmail = filter_var($toEmail, FILTER_SANITIZE_EMAIL);

                    // Validate e-mail
                    if (!filter_var($toEmail, FILTER_VALIDATE_EMAIL) === false) {
                        // Sender by default: No-Reply Email
                        $fromEmail = MailHelper::from($settings->get("app.noreplyEmail"));

                        // Send email
                        $success = Yii::$app->mailer->compose()
                            ->setFrom($fromEmail)
                            ->setTo($toEmail)
                            ->setSubject(Yii::t('app', 'Test email sent to {email}', ['email' => $toEmail]))
                            ->setTextBody(Yii::t('app', 'This is a test email generated by {app}.', ['app' => $settings->get("app.name")]))
                            ->setHtmlBody(Yii::t('app', 'This is a test email generated by {app}.', ['app' => $settings->get("app.name")]))
                            ->send();

                        // Show success alert
                        if ($success) {
                            Yii::$app->getSession()->setFlash(
                                'success',
                                Yii::t('app', "Test email has been successfully sent.")
                            );
                        } else {
                            Yii::$app->getSession()->setFlash(
                                'danger',
                                Yii::t('app', "Test email was not sent.")
                            );
                        }

                    }

                } elseif (isset($post['action']) && $post['action'] === 'site-emails') {

                    $settings->set('app.adminEmail', strip_tags($request->post('app_adminEmail', $settings->get('app.adminEmail'))));
                    $settings->set('app.supportEmail', strip_tags($request->post('app_supportEmail', $settings->get('app.supportEmail'))));
                    $settings->set('app.noreplyEmail', strip_tags($request->post('app_noreplyEmail', $settings->get('app.noreplyEmail'))));

                    // Show success alert
                    Yii::$app->getSession()->setFlash(
                        'success',
                        Yii::t('app', 'Site Emails have been successfully updated.')
                    );

                } elseif (isset($post['action']) && $post['action'] === 'from-name') {

                    // Remove all illegal characters from name
                    $defaultFromName = HtmlPurifier::process($request->post('app_defaultFromName'));
                    // Save
                    $settings->set('app.defaultFromName', $defaultFromName);
                    // Show success alert
                    Yii::$app->getSession()->setFlash(
                        'success',
                        Yii::t('app', 'From Name has been successfully updated.')
                    );

                } elseif (isset($post['action']) && $post['action'] === 'email-settings') {

                    // Get settings
                    $mailerTransport = $request->post('app_mailerTransport', $settings->get('app.mailerTransport'));

                    // Test SMTP connection
                    if ($mailerTransport === 'smtp') {
                        $host = $request->post('smtp_host', $settings->get('smtp.host'));
                        $port = $request->post('smtp_port', $settings->get('smtp.port'));
                        $encryption = $request->post('smtp_encryption', $settings->get('smtp.encryption'));
                        $username = $request->post('smtp_username', $settings->get('smtp.username'));
                        $password = $request->post('smtp_password', $settings->get('smtp.password'));
                        $async = $request->post('app_async', null);
                        // Test SMTP connection
                        $transport = Swift_SmtpTransport::newInstance($host, $port);
                        if ($encryption !== 'none') {
                            $transport = Swift_SmtpTransport::newInstance($host, $port, $encryption);
                        }
                        $transport->setUsername($username);
                        $transport->setPassword($password);
                        $mailer = Swift_Mailer::newInstance($transport);
                        $mailer->getTransport()->start();
                        // Save settings
                        $settings->set('smtp.host', $host);
                        $settings->set('smtp.port', $port);
                        $settings->set('smtp.encryption', $encryption);
                        $settings->set('smtp.username', $username);
                        $settings->set('smtp.password', $password);
                        $settings->set('app.async', is_null($async) ? 0 : 1);
                        // Save Mailer Transport
                        $settings->set('app.mailerTransport', $mailerTransport);
                        // Show success alert
                        Yii::$app->getSession()->setFlash(
                            'success',
                            Yii::t('app', 'Mail Settings have been successfully updated.')
                        );
                    } elseif ($mailerTransport === 'sendinblue') {
                        $apiKey = $request->post('sendinblue_key');
                        if (!empty($apiKey)) {
                            $settings->set('sendinblue.key', $apiKey);
                            // Save Mailer Transport
                            $settings->set('app.mailerTransport', $mailerTransport);
                            // Show success alert
                            Yii::$app->getSession()->setFlash(
                                'success',
                                Yii::t('app', 'Mail Settings have been successfully updated.')
                            );
                        } else {
                            $settings->set('sendinblue.key', '');
                            // Show success alert
                            Yii::$app->getSession()->setFlash(
                                'danger',
                                Yii::t('app', 'Your Sendinblue Api Key is empty. Try it again.')
                            );
                        }
                    } elseif ($mailerTransport === 'ses') {
                        $sesAccessKeyId = $request->post('aws_sesAccessKeyId');
                        $sesSecretAccessKey = $request->post('aws_sesSecretAccessKey');
                        $sesRegion = $request->post('aws_sesRegion');
                        if (!empty($sesAccessKeyId) && !empty($sesSecretAccessKey) && !empty($sesRegion)) {
                            $settings->set('aws.sesAccessKeyId', $sesAccessKeyId);
                            $settings->set('aws.sesSecretAccessKey', $sesSecretAccessKey);
                            $settings->set('aws.sesRegion', $sesRegion);
                            // Save Mailer Transport
                            $settings->set('app.mailerTransport', $mailerTransport);
                            // Show success alert
                            Yii::$app->getSession()->setFlash(
                                'success',
                                Yii::t('app', 'Mail Settings have been successfully updated.')
                            );
                        } else {
                            $settings->set('aws.sesAccessKeyId', '');
                            $settings->set('aws.sesSecretAccessKey', '');
                            // Show error alert
                            Yii::$app->getSession()->setFlash(
                                'danger',
                                Yii::t('app', 'There is an error with your Amazon SES Access Keys. Try it again.')
                            );
                        }
                    } elseif ($mailerTransport === 'php') {
                        // Save Mailer Transport
                        $settings->set('app.mailerTransport', $mailerTransport);
                        // Show success alert
                        Yii::$app->getSession()->setFlash(
                            'success',
                            Yii::t('app', 'The SMTP Server settings have been successfully updated.')
                        );
                    }
                }

            } catch (\Exception $e) {
                // Log error
                Yii::error($e);
                // Show error alert
                Yii::$app->getSession()->setFlash(
                    'danger',
                    $e->getMessage()
                );
            }
        }

        return $this->render('mail');

    }

    /**
     * Form Tools
     *
     * @return string
     * @throws \Exception
     */
    public function actionForm()
    {
        $this->layout = 'admin'; // In @app/views/layouts

        $request = Yii::$app->request;
        $settings = Yii::$app->settings;

        if ($post = $request->post()) {

            if (isset($post['action']) && $post['action'] === 'recaptcha') {

                $settings->set('app.reCaptchaVersion', strip_tags($request->post('app_reCaptchaVersion', $settings->get('app.reCaptchaVersion'))));
                $settings->set('app.reCaptchaSiteKey', strip_tags($request->post('app_reCaptchaSiteKey', $settings->get('app.reCaptchaSiteKey'))));
                $settings->set('app.reCaptchaSecret', strip_tags($request->post('app_reCaptchaSecret', $settings->get('app.reCaptchaSecret'))));

                Yii::$app->getSession()->setFlash(
                    'success',
                    Yii::t('app', 'The reCAPTCHA API Keys have been updated.')
                );

            } elseif (isset($post['action']) && $post['action'] === 'browser-geolocation') {

                $browserGeolocation = $request->post('app_browserGeolocation', null);
                $settings->set('app.browserGeolocation', is_null($browserGeolocation) ? 0 : 1);
                $settings->set('app.geocodingProvider', strip_tags($request->post('app_geocodingProvider', $settings->get('app.geocodingProvider'))));
                $settings->set('app.googleGeocodingApiKey', strip_tags($request->post('app_googleGeocodingApiKey', $settings->get('app.googleGeocodingApiKey'))));

                Yii::$app->getSession()->setFlash(
                    'success',
                    Yii::t('app', 'The Browser Geolocation Tool have been updated.')
                );

            } elseif (isset($post['action']) && $post['action'] === 'image-compression') {

                $imageCompression = $request->post('app_imageCompression', null);
                $settings->set('app.imageCompression', is_null($imageCompression) ? 0 : 1);
                $settings->set('app.imageQuality', strip_tags($request->post('app_imageQuality', $settings->get('app.imageQuality'))));

                Yii::$app->getSession()->setFlash(
                    'success',
                    Yii::t('app', 'The Image Compression Tool have been updated.')
                );

            } elseif (isset($post['action']) && $post['action'] === 'update-form-fields') {

                $updater = new FormBuilderUpdater();

                /** @var FormData[] $data */
                $data = FormData::find()
                    ->indexBy('id')
                    ->all();

                foreach ($data as $f) {
                    $version = !empty($f->version) ? $f->version : '1.0';
                    $builder = !empty($f->builder) ? $f->builder : [];
                    $f->builder = $updater->updateFields($builder, $version);
                    $f->version = Yii::$app->version;
                    $f->save();
                }

                /** @var Template[] $template */
                $template = Template::find()
                    ->indexBy('id')
                    ->all();

                foreach ($template as $f) {
                    $version = !empty($f->version) ? $f->version : '1.0';
                    $builder = !empty($f->builder) ? $f->builder : [];
                    $f->builder = $updater->updateFields($builder, $version);
                    $f->version = Yii::$app->version;
                    $f->save();
                }

                Yii::$app->getSession()->setFlash(
                    'success',
                    Yii::t('app', 'The Form Builder fields have been successfully updated.')
                );

            }

        }

        return $this->render('form');
    }

    public function actionTools()
    {
        $this->layout = 'admin'; // In @app/views/layouts

        if ($post = Yii::$app->request->post()) {

            // Run cron
            if (isset($post['action']) && $post['action'] === 'cron') {
                Console::run('cron');
                Yii::$app->getSession()->setFlash(
                    'success',
                    Yii::t('app', 'Cron ran successfully.')
                );
            }

            // Refresh cache & assets
            if (isset($post['action']) && $post['action'] === 'cache') {

                $writable = true;

                $subdirectories = FileHelper::scandir(Yii::getAlias('@runtime/cache'));

                foreach ($subdirectories as $subdirectory) {
                    if (!is_writable(Yii::getAlias('@runtime/cache') . DIRECTORY_SEPARATOR . $subdirectory)) {
                        $writable = false;
                    }
                }

                // Flush all cache
                $flushed = Yii::$app->cache->flush();

                // Remove all assets
                foreach (glob(Yii::$app->assetManager->basePath . DIRECTORY_SEPARATOR . '*') as $asset) {
                    if (is_link($asset)) {
                        @unlink($asset);
                    } elseif (is_dir($asset)) {
                        FileHelper::removeDirectory($asset);
                    } else {
                        @unlink($asset);
                    }
                }

                // Show success alert
                if ($writable && $flushed) {
                    Yii::$app->getSession()->setFlash(
                        'success',
                        Yii::t('app', 'The cache and assets have been successfully refreshed.')
                    );
                } else {
                    Yii::$app->getSession()->setFlash(
                        'danger',
                        Yii::t('app', 'There was a problem clearing the cache. Please retry later.')
                    );
                }
            }

            if (isset($post['action']) && $post['action'] === 'analytics') {

                Analytics::aggregate();

                Yii::$app->getSession()->setFlash(
                    'success',
                    Yii::t('app', 'Analytics has successfully updated the stats tables.')
                );

            }

        }

        return $this->render('tools');
    }

    public function actionImportExport()
    {
        $this->layout = 'admin'; // In @app/views/layouts

        if ($post = Yii::$app->request->post()) {
            // Import
            if (isset($post['action']) && $post['action'] === 'import') {
                $transaction = Form::getDb()->beginTransaction();
                try {
                    $file = UploadedFile::getInstanceByName('file');
                    $content = Json::decode(file_get_contents($file->tempName));
                    if (!empty($content['forms'])) {
                        foreach ($content['forms'] as $form) {
                            // Form
                            $formModel = new Form();
                            $formModel->attributes = $form['form'];
                            $formModel->id = null;
                            $formModel->isNewRecord = true;
                            $formModel->save();

                            // Form Data
                            $formDataModel = new FormData();
                            $formDataModel->attributes = $form['data'];
                            $formDataModel->id = null;
                            $formDataModel->form_id = $formModel->id;
                            $formDataModel->isNewRecord = true;
                            $formDataModel->save();

                            // Confirmation
                            $formConfirmationModel = new FormConfirmation();
                            $formConfirmationModel->attributes = $form['confirmation'];
                            $formConfirmationModel->id = null;
                            $formConfirmationModel->form_id = $formModel->id;
                            $formConfirmationModel->isNewRecord = true;
                            $formConfirmationModel->save();

                            // Notification
                            $formEmailModel = new FormEmail();
                            $formEmailModel->attributes = $form['email'];
                            $formEmailModel->id = null;
                            $formEmailModel->form_id = $formModel->id;
                            $formEmailModel->isNewRecord = true;
                            $formEmailModel->save();

                            // UI
                            $formUIModel = new FormUI();
                            $formUIModel->id = null;
                            $formUIModel->form_id = $formModel->id;
                            $formUIModel->isNewRecord = true;
                            $formUIModel->save();

                            // Conditional Rules
                            foreach($form['rules'] as $rule){
                                $formRuleModel = new FormRule();
                                $formRuleModel->attributes = $rule;
                                $formRuleModel->id = null;
                                $formRuleModel->form_id = $formModel->id;
                                $formRuleModel->isNewRecord = true;
                                $formRuleModel->save();
                            }
                        }

                        $transaction->commit();
                        Yii::$app->getSession()->setFlash('success', Yii::t('app', 'The form has been successfully imported'));
                    }

                } catch(\Exception $e) {
                    $transaction->rollBack();
                    Yii::$app->getSession()->setFlash('danger', Yii::t('app', 'The form could not be imported'));
                }
            }

            // Export
            if (isset($post['action']) && $post['action'] === 'export') {
                if (empty($post['forms'])) {
                    Yii::$app->getSession()->setFlash(
                        'danger',
                        Yii::t('app', 'Please select a form to export the migration file')
                    );
                } else {
                    $filename = '';
                    $content = [];
                    $ids = $post['forms'];
                    $forms = Form::findAll(['id' => $ids]);

                    foreach ($forms as $form) {
                        $content[] = [
                            'form' => ArrayHelper::toArray($form),
                            'data' => ArrayHelper::toArray($form->formData),
                            'confirmation' => ArrayHelper::toArray($form->formConfirmation),
                            'email' => ArrayHelper::toArray($form->formEmail),
                            'rules' => ArrayHelper::toArray($form->formRules),
                        ];
                        $filename = SlugHelper::slug($form->name, ['delimiter' => '_']);
                    }
                    $content = Json::encode([
                        'forms' => $content
                    ]);
                    $filename = count($forms) > 1 ? 'forms' : $filename;
                    $filename = $filename . '_' . Carbon::today()->toDateString() . '.json';

                    $options = [
                        'mimeType' => 'application/json',
                        'inline' => false,
                    ];

                    return Yii::$app->response->sendContentAsFile($content, $filename, $options);
                }
            }
        }

        // Select id & name of all forms in the system
        $forms = Form::find()->select(['id', 'name'])->orderBy('updated_at DESC')->asArray()->all();
        $forms = ArrayHelper::map($forms, 'id', 'name');

        return $this->render('import-export', [
            'forms' => $forms,
        ]);
    }

    /**
     * Delete logo
     *
     * @return array|string
     */
    public function actionLogoDelete()
    {

        // Delete for ajax request
        if (Yii::$app->request->isAjax) {

            Yii::$app->response->format = Response::FORMAT_JSON;

            $image = Yii::$app->settings->get('app.logo');
            if (!Yii::$app->fs->delete($image)) {
                Yii::$app->session->setFlash(
                    'error',
                    Yii::t('app', 'Has occurred an error deleting your logo.')
                );
                return [
                    'success' => 0,
                ];
            };
            Yii::$app->settings->set('app.logo', '');
            Yii::$app->session->setFlash("success", Yii::t('app', 'Your logo has been deleted.'));
            return [
                'success' => 1,
            ];
        }

        Yii::$app->session->setFlash(
            'error',
            Yii::t('app', 'Bad request.')
        );

        return [
            'success' => 0,
        ];
    }
}
