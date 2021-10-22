<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.14
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2021 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\components\validators;

use Yii;
use yii\base\InvalidConfigException;
use yii\validators\EmailValidator as BaseEmailValidator;

/**
 * Class EmailValidator
 * @package app\components\validators
 */
class EmailValidator extends BaseEmailValidator
{
    use ValidatorTrait;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        if ($this->enableIDN && !function_exists('idn_to_ascii')) {
            throw new InvalidConfigException('In order to use IDN validation intl extension must be installed and enabled.');
        }
        if ($this->message === null) {
            $this->message = Yii::t('app', '{attribute} is not a valid email address.');
        }

        parent::init();
    }
}