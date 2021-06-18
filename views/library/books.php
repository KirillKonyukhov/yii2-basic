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
<h3>Книги</h3>
<table bgcolor="black" border='1'><tr><td>book_id</td><td>nazvanie</td><td>opisanie</td><td>god</td><td>avtor_id</td><td>ganr_id</td>
<ul>
    <?php foreach ($books as $books): ?>
    <tr>
        <td><?= Html::encode("{$books->book_id}") ?></td>
        <td><?= $books->nazvanie ?></td>
        <td><?= $books->opisanie ?></td>
        <td><?= $books->god ?></td>
        <td><?= $books->avtor->FIO?></td>
        <td><?= $books->ganr->nazvanie_ganr ?></td>
    </tr>
<?php endforeach; ?>
</ul>
</table>
<li><a href="http://localhost/basic/web/index.php?r=library%2Ffind">Поиск книг написанных в 20 веке</a></li>
<li><a href="http://localhost/basic/web/index.php?r=library%2Ffind1">Авторы и количество написанных книг</a></li>
<li><a href="http://localhost/basic/web/index.php?r=library%2Ffind2">Поиск по названию</a></li>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
