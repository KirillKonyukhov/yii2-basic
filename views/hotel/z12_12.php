<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>id</td><td>Клиент</td><td>Документ</td><td>Название отеля</td>
<ul>
<?php foreach ($booking as $booking): ?>
     <tr>
     <td><?= Html::encode($booking['idbooking'])?></td>
     <td><?= Html::encode($booking['client'])?></td>
     <td><?= Html::encode($booking['document'])?></td>
     <td><?= Html::encode($booking['name_hotel'])?></td>
    </tr>
    <?php endforeach; ?>
</ul>
</table>