<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Nomera */

$this->title = 'Изменить: ' . $model->nomer_komanati;
$this->params['breadcrumbs'][] = ['label' => 'Номера', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomer_komanati, 'url' => ['view', 'id' => $model->nomer_komanati]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nomera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
