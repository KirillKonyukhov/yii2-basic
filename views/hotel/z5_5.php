<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>

<table bgcolor="black" border='1'><tr><td>Этаж</td><td>Местность</td><td>Свободен до</td>
<ul>
<?php foreach ($nomera as $nomera): ?>
     <tr>
     <td><?= Html::encode($nomera['etag'])?></td>
     <td><?= Html::encode($nomera['mestnost_nomera'])?></td>
     <td><?= Html::encode($nomera['data_zas'])?></td>
    </tr>
    <?php endforeach; ?>
</ul>
</table>