<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Броня';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table table-bordered table-striped table-hover'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idbooking',
            'client',
            'firm',
            'document',
            'nomer_komanatii',
            //'id_complaints',
            [
            'attribute' => 'data_complaint',
            'value' => 'complaints.data_complaint',
            'label' =>'Дата жалобы'
            ],
            //'id_sotrudnik',
            [
            'attribute' => 'FIO_S',
            'value' => 'sotrudnik.FIO_S',
            'label' =>'ФИО Сотрудника'
            ],
            [
            'attribute' => 'name_hotel',
            'value' => 'hotels.name_hotel',
            'label' =>'Отели'
            ],
            'dolg',
            //'id_uslugis',
            [
            'attribute' => 'name_uslugi',
            'value' => 'uslugis.name_uslugi',
            'label' =>'Название услуги'
            ],
            'data_zas',
            'data_vis',
            'skidka',
            'kolvo_mest',
            'data_booking',

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