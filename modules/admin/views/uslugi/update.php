<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Uslugi */

$this->title = 'Изменить: ' . $model->name_uslugi;
$this->params['breadcrumbs'][] = ['label' => 'Услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_uslugi, 'url' => ['view', 'id' => $model->id_uslugi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uslugi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
