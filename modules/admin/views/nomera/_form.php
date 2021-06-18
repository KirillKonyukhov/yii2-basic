<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Nomera */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nomera-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mestnost_nomera')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'etag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'booking')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
