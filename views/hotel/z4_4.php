<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
?>
<h3>Результат</h3>
<table bgcolor="black" border='1'><tr><td>Количество номеров</td>
<ul>
<?php foreach ($nomera as $nomera): ?>
     <tr>
     <td><?= Html::encode($nomera['cou'])?></td>
     <tr>
    <?php endforeach;?>
</ul>
</table>