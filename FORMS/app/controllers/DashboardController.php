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

use app\components\User;
use app\helpers\ArrayHelper;
use app\models\Form;
use app\models\FormSubmission;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\db\Query;

/**
 * Class DashboardController
 * @package app\controllers
 */
class DashboardController extends Controller
{

    /** @inheritdoc */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {

        if (!parent::beforeAction($action)) {
            return false;
        }

        return true; // or false to not run the action
    }

    /**
     * Dashboard
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $limit = isset(Yii::$app->params['ListGroup.listSize']) ? Yii::$app->params['ListGroup.listSize'] : 5;

        /** @var User $currentUser */
        $currentUser = Yii::$app->user;

        // Date Filters
        $startDate = Yii::$app->request->get('start_date');
        $endDate = Yii::$app->request->get('end_date');

        if ($startDate && $endDate) {
            $startDate = date("Y-m-d", strtotime(trim($startDate))) ;
            $endDate = date("Y-m-d", strtotime(trim($endDate)));
        } else {
            $startDate = date("Y-m-d", strtotime("-1 week")) ;
            $endDate = date("Y-m-d");
        }

        // Current User's filter
        $forms = $currentUser->forms()->asArray()->all();
        $formIds = ArrayHelper::getColumn($forms, 'id');
        // Important restriction. If empty, don't show any form data
        $formIds = count($formIds) > 0 ? $formIds : 0;

        // Performance Stats
        $stats = (new Query())->from('{{%stats_performance}}')
            ->select('SUM(users) AS form_users, SUM(fills) AS form_starters, SUM(conversions) AS form_conversions, SUM(conversionTime) AS form_conversion_time')
            ->from('{{%stats_performance}}')
            ->where(['app_id' => $formIds])
            ->andFilterWhere(['between', 'day', $startDate, $endDate])
            ->one();

        $stats = !empty($stats) ? $stats : [];
        $stats['form_users'] = isset($stats['form_users']) ? $stats['form_users'] : 0;
        $stats['form_starters'] = isset($stats['form_starters']) ? $stats['form_starters'] : 0;
        $stats['form_conversions'] = isset($stats['form_conversions']) ? $stats['form_conversions'] : 0;
        $stats['form_conversion_time'] = isset($stats['form_conversion_time'], $stats['form_conversions']) ? $stats['form_conversion_time'] / $stats['form_conversions'] : 0;
        $stats['start_typing_rate'] = !empty($stats['form_users']) ? round($stats['form_starters']  * 100 / $stats['form_users']) : 0;
        $stats['completion_rate'] =  !empty($stats['form_starters']) ? round($stats['form_conversions']  * 100 / $stats['form_starters']) : 0;
        $stats['conversion_rate'] = !empty($stats['form_users']) ? round($stats['form_conversions']  * 100 / $stats['form_users']) : 0;

        $report = (new Query())
            ->select(['s.app_id AS id', 'f.name AS name', 'SUM(s.users) AS users', 'SUM(s.fills) AS starters', 'SUM(s.conversions) AS conversions'])
            ->from('{{%stats_performance}} AS s')
            ->innerJoin('{{%form}} AS f', 's.app_id = f.id')
            ->andWhere(['s.app_id' => $formIds])
            ->andFilterWhere(['between', 'day', $startDate, $endDate])
            ->groupBy(['id'])
            ->limit($limit);

        // More users query
        $formsByUsersQuery = clone $report;
        // More starters query
        $formsByStartersQuery = clone $report;
        // More conversions query
        $formsByConversionsQuery = clone $report;

        // More users
        $formsByUsers = $formsByUsersQuery->having(['!=', 'users', 0])->orderBy('users DESC')->all();
        // More starters
        $formsByStarters = $formsByStartersQuery->having(['!=', 'starters', 0])->orderBy('starters DESC')->all();
        // More conversions
        $formsByConversions = $formsByConversionsQuery->having(['!=', 'conversions', 0])->orderBy('conversions DESC')->all();

        // Last updated forms list
        $updatedForms = (new Query())
            ->select(['id', 'name', 'updated_at'])
            ->from('{{%form}} AS f')
            ->andFilterWhere(['f.id' => $formIds])
            ->orderBy('updated_at DESC')
            ->limit($limit)
            ->all();

        // Unread submissions
        $unreadSubmissions = FormSubmission::find()
            ->where(['new' => 1])
            ->andFilterWhere(['form_id' => $formIds])
            ->orderBy('id DESC')
            ->limit($limit)
            ->all();

        // My Last Submitted Forms
        $mySubmissionsByForm =  (new Query())
            ->select(['fs1.id', 'fs1.form_id'])
            ->from('{{%form_submission}} AS fs1')
            ->leftJoin('{{%form_submission}} as fs2', 'fs1.form_id = fs2.form_id AND fs1.id < fs2.id')
            ->where(['fs2.id' => null])
            ->andWhere(['fs1.created_by' => Yii::$app->user->id])
            ->andFilterWhere(['fs1.form_id' => $formIds])
            ->orderBy('fs1.id DESC')
            ->limit($limit)
            ->all();

        $mySubmissionsByFormIds = ArrayHelper::getColumn($mySubmissionsByForm, 'id');

        $myLastSubmissions = FormSubmission::find()
            ->where(['id' => $mySubmissionsByFormIds])
            ->orderBy('id DESC')
            ->limit($limit)
            ->all();

        // Chart data
        $data = (new Query())
            ->select(['s.day AS labels', 'SUM(s.users) AS users', 'SUM(s.fills) AS starters', 'SUM(s.conversions) AS conversions'])
            ->from('{{%stats_performance}} AS s')
            ->andWhere(['s.app_id' => $formIds])
            ->andFilterWhere(['between', 'day', $startDate, $endDate])
            ->groupBy(['labels'])
            ->orderBy('labels ASC')
            ->all();

        return $this->render('index', [
            'stats' => $stats,

            'formsByUsers' => $formsByUsers,
            'formsByStarters' => $formsByStarters,
            'formsByConversions' => $formsByConversions,

            'updatedForms' => $updatedForms,
            'unreadSubmissions' => $unreadSubmissions,
            'myLastSubmissions' => $myLastSubmissions,
            'data' => $data,

            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
    }
}
