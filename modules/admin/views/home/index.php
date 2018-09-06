<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="home-index">

    <h1>ЦЕНЫ ДЛЯ ТРЕХ БЛОКОВ</h1>

    <p>
        <!--        --><?//= Html::a('Create Home', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider2,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
            ],

            'id',
            'name',
            'job',
            'material1',
            'material2',

            ['class' => 'yii\grid\ActionColumn',
                'buttons'=>[
                    'update' => function ($url, $model, $key)  {

                        return Html::a('', ['/admin/home-services/update' , 'id'=> $key], ['class' => 'glyphicon glyphicon-pencil']);

                    },
                    'view' => function ($url, $model, $key)   {

                        return Html::a('', ['/admin/home-services/view', 'id'=> $key], ['class' => 'glyphicon glyphicon-eye-open']);

                    },
                ],
                'template' => '{view}{update}'],
        ],
    ]); ?>
</div>

<div class="home-index">

    <h1>КОНТЕНТ ГЛАВНОЙ</h1>

    <p>
<!--        --><?//= Html::a('Create Home', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
               ],

            'id',
            'title',
            'content:ntext',
            'keywords',
            'description',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}{update}',],
        ],
    ]); ?>
</div>
