<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>Название фирмы</td><td>Объем брон. комнат</td>
<ul>
<?php foreach ($booking as $booking): ?>
     <tr>
     <td><?= Html::encode($booking['firm'])?></td>
     <td><?= Html::encode ($booking['cou'])?></td>
    <?php endforeach; ?>
    <tr><td>Местность предпочитаемых комнат</td>
    <?php foreach ($count as $count): ?>
    <td><?= Html::encode ($count['kolvo_mest'])?></td>
    <?php endforeach; ?>
</ul>
</table>