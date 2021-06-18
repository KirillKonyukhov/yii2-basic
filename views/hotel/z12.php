<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\booking;
use yii\helpers\ArrayHelper;
?>
  <h3>12.	Получить сведения о наиболее часто посещающих гостиницу постояльцах по всем корпусам гостиниц, по определенному зданию.  </h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($booking,'id_hotel1')->dropDownList(ArrayHelper::map(booking::find()->all(), 'id_hotels', 'id_hotels'))->label('Здание'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>