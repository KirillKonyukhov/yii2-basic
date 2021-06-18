<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Dolgnost */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Должность', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dolgnost-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
