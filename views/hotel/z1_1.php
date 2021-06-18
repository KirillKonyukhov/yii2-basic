<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
?>
<h3>Результат</h3>
<?=
    GridView::widget([
      'dataProvider' => $dataProvider,
      'tableOptions' => ['class' => 'table table-bordered table-striped'],
      'columns' => [
        'idbooking',
        'firm',
      ],
    ]);
  ?>