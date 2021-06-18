<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\NomeraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nomera-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nomer_komanati') ?>

    <?= $form->field($model, 'mestnost_nomera') ?>

    <?= $form->field($model, 'etag') ?>

    <?= $form->field($model, 'booking') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
