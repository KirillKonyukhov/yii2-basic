<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\nomera;
use yii\helpers\ArrayHelper;
?>
  <h3>4.Получить сведения о количестве свободных номеров с указанными характеристиками. </h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($nomera,'etag')->dropDownList(ArrayHelper::map(nomera::find()->all(), 'etag', 'etag'))->label('Этаж'),
     Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
  <?php ActiveForm::end();  ?>