<?php

use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

NavBar::begin([
    'options' => [
        'class' => '',
    ],
]);
echo Nav::widget([
    'options' => [],
    'items' => [
        Yii::$app->user->isGuest ? ['label' => 'Вход', 'url' => ['/site/login']] : ['label' => 'Выход (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']],
    ],
]);
NavBar::end();
?>