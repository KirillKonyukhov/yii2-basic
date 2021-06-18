<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
  <h3>6.Получить список занятых сейчас номеров, которые освобождаются к указанному сроку. </h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($nomera,'data1')->label('От')-> input('date'),
     $form->field($nomera,'data2')->label('До')-> input('date'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>