<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>16.	Получить процентное отношение всех номеров к номерам, бронируемым партнерами.    </h3>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>Процентное отношение</td>
<ul>
<?php foreach ($booking as $booking): ?>
     <tr>
     <td><?= Html::encode($booking['cou'])?></td>
    </tr>
    <?php endforeach; ?>
</ul>
</table>