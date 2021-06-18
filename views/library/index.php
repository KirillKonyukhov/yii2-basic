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
<h3>Авторы</h3>
<table bgcolor="black" border='1'><tr><td>avtor_id</td><td>FIO</td><td>birth</td><td>death</td>
<ul>
<?php foreach ($avtor as $avtor): ?>
     <tr>
        <td><?= Html::encode("{$avtor->avtor_id}") ?></td>
        <td><?= $avtor->FIO ?></td>
        <td><?= $avtor->birth ?></td>
        <td><?= $avtor->death ?></td>
    </tr>
    <?php endforeach; ?>
</ul>
</table>
<li><a href="http://localhost/basic/web/index.php?r=library%2Fcreate">Добавить автора</a></li>
<li><a href="http://localhost/basic/web/index.php?r=library%2Fdelet">Удалить</a></li>
<?= LinkPager::widget(['pagination' => $pagination]) ?>