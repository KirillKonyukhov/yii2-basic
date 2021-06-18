<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\booking;
use yii\helpers\ArrayHelper;
?>
  <h3>14.	Получить сведения о конкретном человеке, сколько раз он посещал гостиницу, в каких номерах и в какой период останавливался, какие счета оплачивал. </h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($booking,'client1')->dropDownList(ArrayHelper::map(booking::find()->where(['NOT LIKE', 'client', '-' . '%', false])->all(), 'client', 'client'))->label('ФИО'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>