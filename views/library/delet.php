<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
  <h3>БД my_library1</h3>
<ul style="list-style: none; margin: 0; padding-left: 0">
<li style=" display: inline"><a href="http://localhost/basic/web/index.php?r=library%2Findex">Авторы</a></li>
<li style=" display: inline"><a href="http://localhost/basic/web/index.php?r=library%2Fganr">Жанры</a></li>
<li style=" display: inline"><a href="http://localhost/basic/web/index.php?r=library%2Fbooks">Книги</a></li>
</ul>
<h3>Удаление по id</h3>
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($avtor, 'avtor_id')->textInput() ?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
  <?php ActiveForm::end();  ?>
