<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>id</td><td>ФИО</td>
<ul>
<?php foreach ($booking as $booking): ?>
     <tr>
     <td><?= Html::encode($booking['idbooking'])?></td>
     <td><?= Html::encode($booking['client'])?></td>
    </tr>
    <?php endforeach; ?>
    <tr><td>Количество постояльцев</td>
    <?php foreach ($count as $count): ?>
    <td><?= Html::encode ($count['cou'])?></td>
    <?php endforeach; ?>
</ul>
</table>