<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Booking;
use yii\widgets\LinkPager;
use yii\grid\GridView;
?>
  <h3>1.	Получить перечень и общее число фирм, забронировавших места в объеме, не менее указанного, за весь период сотрудничества, либо за некоторый период. </h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($booking,'n')->dropDownList(ArrayHelper::map(Booking::find()->all(), 'kolvo_mest', 'kolvo_mest'))->label('Количество мест'),
     $form->field($booking,'data1')->label('От')-> input('date'),
     $form->field($booking,'data2')->label('До')-> input('date'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>