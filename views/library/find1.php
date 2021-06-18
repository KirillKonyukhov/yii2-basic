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
<table bgcolor="black" border='1'><tr><td>FIO</td><td>kolvo</td>
<ul>
<?php foreach ($books as $books): ?>
     <tr>
        <td><?= $books->avtor->FIO?></td>
        <td><?= $books->kolvo?></td>
    </tr>
    <?php endforeach; ?>
</ul>
</table>
