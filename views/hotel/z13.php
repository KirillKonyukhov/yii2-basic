<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
  <h3>13.	Получить сведения о новых клиентах за указанный период.  </h3>
<?php $form = ActiveForm::begin() ?>
    <?=$form->field($booking,'data1')->label('От')-> input('date'),
     $form->field($booking,'data2')->label('До')-> input('date'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>