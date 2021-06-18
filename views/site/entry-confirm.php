<?php
use yii\helpers\Html;
?>
<?php //if (Yii::$app->session->has('error')):?>
<?php //end(); ?>
<?php      
  if (Yii::$app->request->post('EntryForm')):
             ?>

<h1>Переданный отзыв:</h1>

<ul>
   <li><label>Ваше имя:</label> </th> <td> <?= Html::encode($model->name) ?> </li>
   <li><label>Ваш e-mail:</label> </th> <td> <?= Html::encode($model->email) ?></li>
   <li><label>Ваш возраст:</label> </th> <td> <?= Html::encode($model->age) ?></li>
   <li><label>Дата посещения:</label> </th> <td> <?= Html::encode($model->data) ?></li>
   <li><label>Предпочитаемая кухня:</label> </th> <td> <?= Html::encode($model->kitchen) ?></li>
   <li><label>Рекомедация:</label> </th> <td> <?= Html::encode($model->rec) ?></li>
   <li><label>Отзыв:</label> </th> <td> <?= Html::encode($model->text) ?></li>
<ul>

<?php  endif; ?>
