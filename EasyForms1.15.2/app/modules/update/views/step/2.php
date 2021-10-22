<?php

use yii\bootstrap\Html;
use yii\helpers\Url;
use app\helpers\Language;

$this->title = Yii::t('app', 'Choose language');

// Languages array
$languages = Language::supportedLanguages();

?>

<div class="row">
    <div class="col-sm-4">
        <ul class="list-group">
            <li class="list-group-item">
                <?= Yii::t('app', 'Choose language') ?> <?= Html::icon('ok', ['class' => 'text-success']) ?>
            </li>
            <li class="list-group-item list-group-item-current"><?= Yii::t('app', 'Requirements') ?></li>
            <li class="list-group-item"><?= Yii::t('app', 'Update app') ?></li>
            <li class="list-group-item"><?= Yii::t('app', 'Finished') ?></li>
        </ul>
    </div>
    <div class="col-sm-8 form-wrapper">
        <?= Html::tag('h4', Yii::t('app', 'Requirements'), ['class' => 'step-title']) ?>
        <?= Html::tag('p', Yii::t('app', 'If you have performed the next steps, you may proceed to update Easy Forms.')) ?>
        <?= Html::ol(
            [
                Yii::t('app', 'Back up your database.'),
                Yii::t('app', 'Backup your files.'),
                Yii::t(
                    'app',
                    'Install your new files in the right location, as described in the documentation.'
                ),
            ],
            [
                'item' => function ($item) {
                    return Html::tag('li', $item, ['class' => 'post']);
                }
            ]
        ) ?>

        <div class="form-action">
            <a id="continue" href="<?= Url::to(['3']) ?>" class="btn btn-primary">
                <?= Yii::t('app', 'Update to Easy Forms {version}', ['version' => Yii::$app->version]) ?>
            </a>
        </div>
    </div>
</div>