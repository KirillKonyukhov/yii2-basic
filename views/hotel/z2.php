<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Booking;
?>
  <h3>2.	Получить перечень и общее число постояльцев, заселявшихся в номера с указанными характеристиками за некоторый период.  </h3>
<?php $form = ActiveForm::begin() ?>
<?= $form->field($booking,'n')->dropDownList(ArrayHelper::map(Booking::find()->all(), 'kolvo_mest', 'kolvo_mest'))->label('Количество мест'),
     $form->field($booking,'data1')->label('От')-> input('date'),
     $form->field($booking,'data2')->label('До')-> input('date'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>