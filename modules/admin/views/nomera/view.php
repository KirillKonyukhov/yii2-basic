<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Nomera */

$this->title = $model->nomer_komanati;
$this->params['breadcrumbs'][] = ['label' => 'Номера', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nomera-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('изменит', ['update', 'id' => $model->nomer_komanati], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('удалить', ['delete', 'id' => $model->nomer_komanati], [
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
            'nomer_komanati',
            'mestnost_nomera',
            'etag',
            'booking',
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