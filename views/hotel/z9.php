<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\booking;
use yii\helpers\ArrayHelper;
?>
  <h3>9.	Получить данные о рентабельности номеров с определенными характеристиками: соотношение об объеме продаж номеров к накладным расходам за указанный период.  </h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($booking,'n')->dropDownList(ArrayHelper::map(Booking::find()->all(), 'kolvo_mest', 'kolvo_mest'))->label('Местность'),
     $form->field($booking,'data1')->label('От')-> input('date'),
     $form->field($booking,'data2')->label('До')-> input('date'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>