<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
  <h3>11.	Получить сведения о фирмах, с которыми заключены договора о брони на указанный период.  </h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($booking,'data1')->label('От')-> input('date'),
     $form->field($booking,'data2')->label('До')-> input('date'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>