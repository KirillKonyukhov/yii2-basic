<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SotrudnikSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sotrudnik-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_sotrudnik') ?>

    <?= $form->field($model, 'FIO_S') ?>

    <?= $form->field($model, 'id_dolgnost') ?>

    <?= $form->field($model, 'seria_passport_s') ?>

    <?= $form->field($model, 'nomer_passport_s') ?>

    <?php // echo $form->field($model, 'birth_sotrudnik_s') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
