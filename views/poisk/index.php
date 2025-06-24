<?php

use app\models\Vets;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var app\models\VetsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Vets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vets-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-xs-8">
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $vets, $widget) {
            return Html::a(Html::encode($model->first_name), ['view', 'id' => $model->id]);
        },
    ]) ?>


</div>
