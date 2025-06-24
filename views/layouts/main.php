<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);


$this->registerCssFile("@web/fonts/fontawesome-free-6.7.1-web/css/all.css");
$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!--<header id="headerr">-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => '<img src="images/logo/logo.png" style="width: 5vw; height: 5vw;"> Vet Cat',
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => ['class' => 'headerr']
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
//            ['label' => 'Request', 'url' => ['/site/requests']],
//            ['label' => 'Kabinet', 'url' => ['/site/kabinet']],
//            Yii::$app->user->isGuest
//                ? ['label' => 'Login', 'url' => ['/site/login']]
//                : '<li class="nav-item">'
//                    . Html::beginForm(['/site/logout'])
//                    . Html::submitButton(
//                        'Logout (' . Yii::$app->user->identity->username . ')',
//                        ['class' => 'nav-link btn btn-link logout']
//                    )
//                    . Html::endForm()
//                    . '</li>'
//        ]
//    ]);
//    NavBar::end();
//    ?>
<!--</header>-->

<header>
    <div class="cont">
        <div class="logo">
            <a href="index.html" class="logo_img"></a>
            <a>Vet Cat</a>
        </div>
        <div class="menu">
            <a id="p1" href="<?= \yii\helpers\Url::to(['site/vets']) ?>">Врачи</a>
            <a id="p1" href="<?= \yii\helpers\Url::to(['site/reviews']) ?>">Отзывы</a>
            <a id="p1" href="<?= \yii\helpers\Url::to(['site/uslugi']) ?>">Услуги</a>
            <a id="p4" href="#zatemnenie">Запись на прием</a>
            <?php include 'log.php'?>
        </div>
    </div>
</header>
<div id="zatemnenie">
    <div id="okno">
        <div class="review_form">
            <a>Запись на прием</a>
            <div class="form">

                <div class="name_phone">
                    <input placeholder="Имя Фамилия" ></input>
                    <input placeholder="Номер телефона"></input>
                    <input placeholder="Врач" list="options"></input>
                    <datalist id="options">
                        <option value="Иванов Иван Иванович">
                        <option value="Максименко Максим Максимович">
                        <option value="Иванов Иван Иванович">
                    </datalist>
                    <input placeholder="Ваш питомец"></input>
                </div>

            </div>
            <div class="button">
                <a id="btn" href="#">
                    Отправить
                </a>
                <a href="#" class="close">Закрыть окно</a>
            </div>
        </div>

    </div>
</div>
<main>

        <?= $content ?>

</main>

<footer>
    <div class="left_column">
        <div class="menu">
            <a href="index.html">Главная</a>
            <a href="reviews.html">Отзывы</a>
            <a href="uslugi.html">Услуги</a>
            <a href="vets.html">Врачи</a>
            <a href="#">Запись на прием</a>
        </div>
        <a>copyright VetCat, 2024</a>
    </div>
    <div class="right_column">
        <div class="contacts">
            <a>Контакты</a>
            <div class="ph_numbers">
                <a>+7 999 999 99 99</a>
                <a>+7 999 999 99 99</a>
            </div>
        </div>
        <div class="social">
            <a>Соцсети</a>
            <div class="soc">
                <a href="#"><img src="../web/images/social.png"></a>
                <a href="#"><img src="../web/images/social.png"></a>
                <a href="#"><img src="../web/images/social.png"></a>
            </div>
        </div>
    </div>
</footer>

<?php
$this->registerCssFile("@web/css/layouts.css");
$this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

