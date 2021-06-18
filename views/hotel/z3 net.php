<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
  <h3>3.Получить количество свободных номеров на данный момент.</h3>
<?php $form = ActiveForm::begin() ?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>