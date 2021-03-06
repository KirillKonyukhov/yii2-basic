<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Complaint */

$this->title = 'Обновить: ' . $model->opisanie_complaint;
$this->params['breadcrumbs'][] = ['label' => 'Complaints', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_complaint, 'url' => ['view', 'id' => $model->id_complaint]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="complaint-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
