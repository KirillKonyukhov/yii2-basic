<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>id</td><td>Название</td><td>Документ</td>
<ul>
<?php foreach ($booking as $booking): ?>
     <tr>
     <td><?= Html::encode($booking['idbooking'])?></td>
     <td><?= Html::encode($booking['firm'])?></td>
     <td><?= Html::encode($booking['document'])?></td>
    </tr>
    <?php endforeach; ?>
</ul>
</table>