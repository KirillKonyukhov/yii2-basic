<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Uslugi */

$this->title = $model->name_uslugi;
$this->params['breadcrumbs'][] = ['label' => 'Услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="uslugi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id_uslugi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id_uslugi], [
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
            'id_uslugi',
            'name_uslugi',
            'opisanie_uslugi',
            'price_uslugi',
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