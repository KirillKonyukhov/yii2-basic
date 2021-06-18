<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\booking;
use yii\helpers\ArrayHelper;
?>
  <h3>15.	Получить сведения о конкретном номере: кем он был занят в определенный период.  </h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($booking,'n')->dropDownList(ArrayHelper::map(booking::find()->all(), 'nomer_komanatii', 'nomer_komanatii'))->label('Номер'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>