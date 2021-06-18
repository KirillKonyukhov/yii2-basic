<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\booking;
use yii\helpers\ArrayHelper;
?>
  <h3>10.	Получить сведения о постояльце из заданного номера: его счет гостинице за дополнительные услуги, поступавшие от него жалобы, виды дополнительных услуг, которыми он пользовался.  </h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($booking,'n')->dropDownList(ArrayHelper::map(booking::find()->all(), 'nomer_komanatii', 'nomer_komanatii'))->label('Номер комнаты'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>