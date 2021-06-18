<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>Комната</td><td>Прибыль</td>
<ul>
<?php foreach ($booking as $booking): ?>
     <tr>
     <td><?= Html::encode($booking['nomer_komanatii'])?></td>
     <td><?= Html::encode($booking['s'])?></td>
    </tr>
    <?php endforeach; ?>
    <tr><td>Сумма фирм</td>
    <?php foreach ($count as $count): ?>
    <td><?= Html::encode ($count['s'])?></td>
    <?php endforeach; ?>
</ul>
</table>