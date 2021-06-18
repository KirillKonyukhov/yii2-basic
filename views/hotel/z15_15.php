<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>id</td><td>Фирма</td><td>ФИО</td><td>Дата Заселения</td><td>Дата Выселения</td>
<ul>
<?php foreach ($booking as $booking): ?>
     <tr>
     <td><?= Html::encode($booking['idbooking'])?></td>
     <td><?= Html::encode($booking['firm'])?></td>
     <td><?= Html::encode($booking['client'])?></td>
     <td><?= Html::encode($booking['data_zas'])?></td>
     <td><?= Html::encode($booking['data_vis'])?></td>
    </tr>
    <?php endforeach; ?>
</ul>
</table>