<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Uslugi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uslugi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uslugi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opisanie_uslugi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_uslugi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
