<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\UslugiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uslugi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_uslugi') ?>

    <?= $form->field($model, 'name_uslugi') ?>

    <?= $form->field($model, 'opisanie_uslugi') ?>

    <?= $form->field($model, 'price_uslugi') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
