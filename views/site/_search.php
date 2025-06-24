<?php

use app\models\Post;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\VetsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="vets-search">

    <?php $form = ActiveForm::begin([
        'action' => ['vets'],
        'method' => 'get',
    ]); ?>
    <div class="pois">
        <?= $form->field($model, 'first_name', ['inputOptions' => ['autofocus' => 'autofocus']
        ])->textInput()->input('text', ['placeholder' => "Имя"])->label(false); ?>

        <?= $form->field($model, 'second_name', ['inputOptions' => []
        ])->textInput()->input('text', ['placeholder' => "Фамилия"])->label(false); ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
