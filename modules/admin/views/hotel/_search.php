<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\HotelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hotel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_hotel') ?>

    <?= $form->field($model, 'name_hotel') ?>

    <?= $form->field($model, 'klass_hotel') ?>

    <?= $form->field($model, 'kolvo_nomer') ?>

    <?= $form->field($model, 'kolvo_nomer_na_etage') ?>

    <?php // echo $form->field($model, 'kolvo_odnomestnih_nomer') ?>

    <?php // echo $form->field($model, 'kolvo_dvuhmestnih_nomer') ?>

    <?php // echo $form->field($model, 'kolvo_trehmestnih_nomer') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
