<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Dolgnost */

$this->title = 'Изменить: ' . $model->name_dolgnost;
$this->params['breadcrumbs'][] = ['label' => 'Dolgnosts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dolgnost, 'url' => ['view', 'id' => $model->id_dolgnost]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dolgnost-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
