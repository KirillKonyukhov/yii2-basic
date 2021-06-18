<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Sotrudnik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sotrudnik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FIO_S')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_dolgnost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seria_passport_s')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomer_passport_s')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_sotrudnik_s')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
