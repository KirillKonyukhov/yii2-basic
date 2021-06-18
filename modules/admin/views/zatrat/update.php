<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Zatrat */

$this->title = 'Изменить: ' . $model->dolg;
$this->params['breadcrumbs'][] = ['label' => 'Zatrats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dolg, 'url' => ['view', 'id' => $model->dolg]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zatrat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
