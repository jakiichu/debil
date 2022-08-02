<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Poduct;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PoductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Poducts';
?>
<div class="poduct-index">
<br>
    <h1>Админ панель</h1>

    <p>
        <?= Html::a('Создать ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'file',
            'price',
            'text:ntext',
            'category_id',
            'date',
            'season_id',
            'material_id',
            'manufacturer_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Poduct $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
