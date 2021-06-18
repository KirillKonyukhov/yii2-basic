<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>8.	Получить список недовольных клиентов и их жалобы. </h3>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>ФИО Клиента</td><td>Описание жалобы</td>
<ul>
<?php foreach ($complaint as $complaint): ?>
     <tr>
     <td><?= Html::encode($complaint['client'])?></td>
     <td><?= Html::encode($complaint['opisanie_complaint'])?></td>
    </tr>
    <?php endforeach; ?>
</ul>
</table>