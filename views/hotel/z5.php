<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\nomera;
use yii\helpers\ArrayHelper;
?>
  <h3>5.	Получить сведения о конкретном свободном номере: в течение какого времени он будет пустовать и о его характеристиках.  </h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($nomera,'n')->dropDownList(ArrayHelper::map(nomera::find()->all(), 'nomer_komanati', 'nomer_komanati'))->label('Номер'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>