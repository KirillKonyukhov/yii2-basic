<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Hotel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hotel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_hotel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klass_hotel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kolvo_nomer')->textInput() ?>

    <?= $form->field($model, 'kolvo_nomer_na_etage')->textInput() ?>

    <?= $form->field($model, 'kolvo_odnomestnih_nomer')->textInput() ?>

    <?= $form->field($model, 'kolvo_dvuhmestnih_nomer')->textInput() ?>

    <?= $form->field($model, 'kolvo_trehmestnih_nomer')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
