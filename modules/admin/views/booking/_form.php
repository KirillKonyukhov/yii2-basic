<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\complaint;
use app\modules\admin\models\hotel;
use app\modules\admin\models\sotrudnik;
use app\modules\admin\models\uslugi;
use app\modules\admin\models\nomera;
use app\modules\admin\models\zatrat;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'client')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'document')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomer_komanatii')->dropDownList(ArrayHelper::map(nomera::find()->all(), 'nomer_komanati', 'nomer_komanati'))  ?>

    <?= $form->field($model, 'id_complaints')->dropDownList(ArrayHelper::map(complaint::find()->all(), 'id_complaint', 'opisanie_complaint'))  ?>

    <?= $form->field($model, 'id_sotrudnik')->dropDownList(ArrayHelper::map(sotrudnik::find()->all(), 'id_sotrudnik', 'FIO_S'))  ?>

    <?= $form->field($model, 'id_hotels')->dropDownList(ArrayHelper::map(hotel::find()->all(), 'id_hotel', 'name_hotel'))  ?>

    <?= $form->field($model, 'dolg')->dropDownList(ArrayHelper::map(zatrat::find()->all(), 'dolg', 'dolg'))  ?>

    <?= $form->field($model, 'id_uslugis')->dropDownList(ArrayHelper::map(uslugi::find()->all(), 'id_uslugi', 'name_uslugi'))  ?>

    <?= $form->field($model, 'data_zas')->textInput() ?>

    <?= $form->field($model, 'data_vis')->textInput() ?>

    <?= $form->field($model, 'skidka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kolvo_mest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_booking')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
