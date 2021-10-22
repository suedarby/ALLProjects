<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\addons\modules\mysql\models\MySQL */
/* @var $fieldModel app\modules\addons\modules\mysql\models\MySQLField */
/* @var $forms array [id => name] of Form models */
/* @var $lists array [id => name] of Subscriber Lists */
/* @var $connected boolean The connection to MySQL has been established */

$this->title = Yii::t('app', 'Update Form');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Add-ons'), 'url' => ['/addons']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'MySQL'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Form') .' #'.
    $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');

?>
<div class="mysql-update box box-big box-light">

    <div class="box-header">
        <h3 class="box-title"><?= $this->title ?>
            <span class="box-subtitle">#<?= Html::encode($model->id) ?></span>
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
