<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Complaint */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="complaint-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'opisanie_complaint')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_complaint')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
