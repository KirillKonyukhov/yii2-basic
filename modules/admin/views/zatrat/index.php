<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ZatratSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Затраты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zatrat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'tableOptions' => [
            'class' => 'table table-bordered table-striped table-hover'
        ],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dolg',
            'opisanie',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p>
    <?= Html::a('Назад к админке', ['/admin'], ['class' => 'btn btn-success']) ?>
</p>

</div>
<style>
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
  background-color: yellow;
}
.table-striped tbody td, .table-striped th {
  background-color: black;
}
</style>