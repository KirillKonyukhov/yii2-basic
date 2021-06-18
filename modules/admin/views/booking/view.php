<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Booking */

$this->title = $model->idbooking;
$this->params['breadcrumbs'][] = ['label' => 'Броня', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="booking-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->idbooking], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->idbooking], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idbooking',
            'client',
            'firm',
            'document',
            'nomer_komanatii',
            'complaints.data_complaint',
            'sotrudnik.FIO_S',
            'id_hotels',
            'hotels.name_hotel',
            'dolg',
            'uslugis.name_uslugi',
            'data_zas',
            'data_vis',
            'skidka',
            'kolvo_mest',
            'data_booking',
        ],
    ]) ?>

</div>
<style>
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
  background-color: yellow;
}
.table-striped tbody td, .table-striped th {
  background-color: black;
}
</style>