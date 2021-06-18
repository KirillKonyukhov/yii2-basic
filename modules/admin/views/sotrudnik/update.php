<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Sotrudnik */

$this->title = 'Изменить: ' . $model->FIO_S;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sotrudnik, 'url' => ['view', 'id' => $model->id_sotrudnik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sotrudnik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
