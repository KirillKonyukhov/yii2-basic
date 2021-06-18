<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

  <h1>Отзыв о ресторане:</h1>
  <?php $form = ActiveForm::begin() ?>
  <?= $form -> field($model, 'name') ?>
  <?= $form -> field($model, 'email') -> input ('email') ?>
  <?= $form -> field($model, 'age') ?>
  <?= $form -> field($model, 'data') -> input('date') ?>
  <?=  $form->field($model, 'kitchen')->dropDownList([
    '0' => 'Итальянская',
    '1' => 'Татарская',
    '2' => 'Японская',
    '3' => 'Грузинская',
    '4' => 'Исландская',
    '5' => 'Китайская',
    '6' => 'Испанская',
    '7' => 'Французская',
    '8' => 'Украинская',
    '9' => 'Турецкая',
      ]); ?>

   <?= $form->field($model, 'rec')
        ->radioList([
            '1'=>'Да',
            '0'=>'Нет',
        ]);
    ?>
  <?= $form -> field($model, 'text')->textarea(['rows' => 3]) ?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
  <?php ActiveForm::end();  ?>
