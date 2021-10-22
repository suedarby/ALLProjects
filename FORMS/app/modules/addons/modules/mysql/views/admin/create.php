<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\form\ActiveForm;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use kartik\depdrop\DepDrop;

/* @var $this yii\web\View */
/* @var $model app\modules\addons\modules\mysql\models\MySQL */
/* @var $fieldModel app\modules\addons\modules\mysql\models\MySQLField */
/* @var $forms array [id => name] of Form models */
/* @var $lists array [id => name] of Subscriber Lists */
/* @var $connected boolean The connection to MySQL has been established */

$this->title = Yii::t('app', 'Set Up a Form');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Add-ons'), 'url' => ['/addons']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'MySQL'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mysql-form-page box box-big box-light">

    <div class="box-header">
        <h3 class="box-title"><?= $this->title ?>
            <span class="box-subtitle"><?= Html::encode($model->id) ?></span>
        </h3>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'fieldModel' => $fieldModel,
        'forms' => $forms,
        'lists' => $lists,
        'connected' => $connected,
    ]) ?>

</div>
