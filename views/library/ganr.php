<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h3>БД my_library1</h3>
<ul style="list-style: none; margin: 0; padding-left: 0">
<li style=" display: inline"><a href="http://localhost/basic/web/index.php?r=library%2Findex">Авторы</a></li>
<li style=" display: inline"><a href="http://localhost/basic/web/index.php?r=library%2Fganr">Жанры</a></li>
<li style=" display: inline"><a href="http://localhost/basic/web/index.php?r=library%2Fbooks">Книги</a></li>
</ul>
<h3>Жанры</h3>
<table bgcolor="black" border='1'><tr><td>ganr_id</td><td>nazvanie_ganr</td><td>opisanie_ganr</td>
<ul>
    <?php foreach ($ganr as $ganr): ?>
    <tr>
        <td><?= Html::encode("{$ganr->ganr_id}") ?></td>
        <td><?= $ganr->nazvanie_ganr ?></td>
        <td><?= $ganr->opisanie_ganr ?></td>
    </tr>
<?php endforeach; ?>
</ul>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
