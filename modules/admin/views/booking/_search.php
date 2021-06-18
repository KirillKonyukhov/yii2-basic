<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\BookingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idbooking') ?>

    <?= $form->field($model, 'client') ?>

    <?= $form->field($model, 'firm') ?>

    <?= $form->field($model, 'document') ?>

    <?= $form->field($model, 'nomer_komanatii') ?>

    <?php // echo $form->field($model, 'id_complaints') ?>

    <?php // echo $form->field($model, 'id_sotrudnik') ?>

    <?php // echo $form->field($model, 'id_hotels') ?>

    <?php // echo $form->field($model, 'dolg') ?>

    <?php // echo $form->field($model, 'id_uslugis') ?>

    <?php // echo $form->field($model, 'data_zas') ?>

    <?php // echo $form->field($model, 'data_vis') ?>

    <?php // echo $form->field($model, 'skidka') ?>

    <?php // echo $form->field($model, 'kolvo_mest') ?>

    <?php // echo $form->field($model, 'data_booking') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
