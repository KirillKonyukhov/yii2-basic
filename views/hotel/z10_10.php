<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>Клиент</td><td>Цена доп услуги</td><td>Описание жалобы</td><td>Доп. услуга</td
<ul>
<?php foreach ($booking as $booking): ?>
     <tr>
     <td><?= Html::encode($booking['client'])?></td>
     <td><?= Html::encode($booking['price_uslugi'])?></td>
     <td><?= Html::encode($booking['opisanie_complaint'])?></td>
     <td><?= Html::encode($booking['name_uslugi'])?></td>
    </tr>
    <?php endforeach; ?>
</ul>
</table>