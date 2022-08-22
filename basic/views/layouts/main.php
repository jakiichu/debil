<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.0/dist/vue.js"></script>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <style>
        .bg-dark {
            background-color: #070904 !important;
        }

        .btn-secondary {
            top: 8px;
        }
    </style>
    <header>
        <?php
        NavBar::begin([
            'brandLabel' => '<img src="\img\logo\logo.png" style="display:inline; vertical-align: top; height:50px;"><h1></h1>',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top bg-primary',

            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ml-lg-auto'],
            'items' => [
                ['label' => 'Каталог', 'url' => ['/poduct']],
                ['label' => 'Таблица Размеров', 'url' => ['/site/size']],
                ['label' => 'О нас', 'url' => ['/site/about']],
                Yii::$app->user->isGuest ? (['label' => 'Авторизация', 'url' => ['/site/login']]
                ) : ('<li>'
                    . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                    . Html::submitButton(
                        'Выйти (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-secondary btn-link logout'],
                    )
                    . Html::endForm()
                    . '</li>'
                ),
                Yii::$app->user->isGuest ? (['label' => 'Регистрация', 'url' => ['/user/create']]
                ) : (['label' => 'Админ панель', 'url' => ['/admin'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin()]
                )
            ],
        ]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; венторг VANGUARD <?= date('Y') ?></p>
            <p class="float-right">8(800)555-35-35</p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>