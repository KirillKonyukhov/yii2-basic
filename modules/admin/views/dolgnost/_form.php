<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Dolgnost */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dolgnost-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_dolgnosti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opisanie_dolgnosti')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
