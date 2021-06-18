<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
             ['label' => 'Запросы', 'items' => [
                ['label' => 'Информация', 'url' => ['/site/info']],
                ['label' => 'Запрос1', 'url' => ['/hotel/z1']],
                ['label' => 'Запрос2', 'url' =>['/hotel/z2']],
                ['label' => 'Запрос3', 'url' => ['/hotel/z3']],
                ['label' => 'Запрос4', 'url' => ['/hotel/z4']],
                ['label' => 'Запрос5', 'url' => ['/hotel/z5']],
                ['label' => 'Запрос6', 'url' => ['/hotel/z6']],
                ['label' => 'Запрос7', 'url' => ['/hotel/z7']],
                ['label' => 'Запрос8', 'url' => ['/hotel/z8']],
                ['label' => 'Запрос9', 'url' => ['/hotel/z9']],
                ['label' => 'Запрос10', 'url' => ['/hotel/z10']],
                ['label' => 'Запрос11', 'url' => ['/hotel/z11']],
                ['label' => 'Запрос12', 'url' => ['/hotel/z12']],
                ['label' => 'Запрос13', 'url' => ['/hotel/z13']],
                ['label' => 'Запрос14', 'url' => ['/hotel/z14']],
                ['label' => 'Запрос15', 'url' => ['/hotel/z15']],
                ['label' => 'Запрос16', 'url' => ['/hotel/z16']],
                ['label' => 'хэш', 'url' => ['/site/hash']],
              ]],
            ['label' => 'Админка', 'url' => ['/admin']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
