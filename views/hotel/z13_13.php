<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>id</td><td>фИО</td><td>Документ</td>
<ul>
<?php foreach ($booking as $booking): ?>
     <tr>
     <td><?= Html::encode($booking['idbooking'])?></td>
     <td><?= Html::encode($booking['client'])?></td>
     <td><?= Html::encode($booking['document'])?></td>
    </tr>
    <?php endforeach; ?>
</ul>
</table>