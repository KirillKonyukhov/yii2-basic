<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
  <h3>1.	Получить перечень и общее число фирм, забронировавших места в объеме, не менее указанного, за весь период сотрудничества, либо за некоторый период. </h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($booking,'kolvo_mest')->textInput(),
     $form->field($booking,'data1')->label('От')-> input('date'),
     $form->field($booking,'data2')->label('До')-> input('date'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>