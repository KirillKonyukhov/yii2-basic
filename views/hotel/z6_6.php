<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>Номер комнаты</td><td>Местность</td><td>Освободится к</td>
<ul>
<?php foreach ($nomera as $nomera): ?>
     <tr>
     <td><?= Html::encode($nomera['nomer_komanati'])?></td>
     <td><?= Html::encode($nomera['mestnost_nomera'])?></td>
     <td><?= Html::encode($nomera['data_vis'])?></td>
    </tr>
    <?php endforeach; ?>
</ul>
</table>