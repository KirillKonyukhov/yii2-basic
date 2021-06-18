<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\booking;
use yii\helpers\ArrayHelper;
?>
  <h3>7.	Получить данные об объеме бронирования номеров данной фирмой за указанный период, и каким номерам отдавались предпочтения.  </h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($booking,'firm1')->dropDownList(ArrayHelper::map(booking::find()->where(['NOT LIKE', 'firm', '-' . '%', false])->all(), 'firm', 'firm'))->label('Название фирмы'),
     $form->field($booking,'data1')->label('От')-> input('date'),
     $form->field($booking,'data2')->label('До')-> input('date'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>