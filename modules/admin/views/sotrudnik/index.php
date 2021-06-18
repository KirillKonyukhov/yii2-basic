<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\SotrudnikSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сотрудники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sotrudnik-index">

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

            'id_sotrudnik',
            'FIO_S',
            //'dolgnost.name_dolgnosti',
            [
            'attribute' => 'name_dolgnosti',
            'value' => 'dolgnost.name_dolgnosti',
            'label' =>'Должность'
            ],
            'seria_passport_s',
            'nomer_passport_s',
            'birth_sotrudnik_s',

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