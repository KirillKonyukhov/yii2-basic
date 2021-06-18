<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Hotel */

$this->title = $model->name_hotel;
$this->params['breadcrumbs'][] = ['label' => 'Отель', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hotel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id_hotel], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id_hotel], [
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
            'id_hotel',
            'name_hotel',
            'klass_hotel',
            'kolvo_nomer',
            'kolvo_nomer_na_etage',
            'kolvo_odnomestnih_nomer',
            'kolvo_dvuhmestnih_nomer',
            'kolvo_trehmestnih_nomer',
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