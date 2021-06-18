<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Hotel */

$this->title = 'Изменить: ' . $model->name_hotel;
$this->params['breadcrumbs'][] = ['label' => 'Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_hotel, 'url' => ['view', 'id' => $model->id_hotel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hotel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
