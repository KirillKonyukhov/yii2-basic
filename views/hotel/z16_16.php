<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>Партнер</td>
<ul>
<?php foreach ($booking as $booking): ?>
     <tr>
     <td><?= Html::encode($booking['cou'])?></td>
    </tr>
    <?php endforeach; ?>
    <tr><td>Все фирмы</td>
    <?php foreach ($count as $count): ?>
    <td><?= Html::encode ($count['cou2'])?></td>
    <?php endforeach; ?>
    tr><td>Все фирмы</td>
    <?php foreach ($count as $count): ?>
    <td><?= Html::encode ($count['cou2'])?></td>
    <?php endforeach; ?>
</ul>
</table>