<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>id</td><td>ФИО</td><td>Номер комнаты</td><td>Затраты</td><td>Дата заселения</td><td>Дата выселения</td>
<ul>
<?php foreach ($booking as $booking): ?>
     <tr>
     <td><?= Html::encode($booking['idbooking'])?></td>
     <td><?= Html::encode($booking['client'])?></td>
     <td><?= Html::encode($booking['nomer_komanatii'])?></td>
     <td><?= Html::encode($booking['dolg'])?></td>
     <td><?= Html::encode($booking['data_zas'])?></td>
     <td><?= Html::encode($booking['data_vis'])?></td>
    </tr>
    <?php endforeach; ?>
    <tr><td>Количесвто посещений</td>
    <?php foreach ($count as $count): ?>
    <td><?= Html::encode ($count['cou'])?></td>
    <?php endforeach; ?>
</ul>
</table>