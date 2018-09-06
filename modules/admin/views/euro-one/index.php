<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ЕВРО РЕМОНТ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="euro-one-index">

    <h1>ЕВРО РЕМОНТ - ОСНОВНОЙ ТЕКСТ</h1>

    <?= GridView::widget([
        'dataProvider' => $main,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'text:ntext',
            ['class' => 'yii\grid\ActionColumn',
                'buttons'=>[
                'update' => function ($url, $model, $key)  {

                    return Html::a('', ['/admin/services/update' , 'id'=> $key], ['class' => 'glyphicon glyphicon-pencil']);

                },
                'view' => function ($url, $model, $key)   {

                    return Html::a('', ['/admin/services/view', 'id'=> $key], ['class' => 'glyphicon glyphicon-eye-open']);

                },

            ], 'template' => '{view}{update}']

        ],
    ]); ?>
</div>


<div class="euro-one-index">

    <h1>ТАБЫ ПЕРВЫЕ</h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'text:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>


<div class="euro-one-index">

    <h1>ТАБЫ ВТОРЫЕ</h1>

    <p>
        <?= Html::a('Создать', ['/admin/euro-two/create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $data2,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'text:ntext',

            ['class' => 'yii\grid\ActionColumn', 'buttons'=>[
                'update' => function ($url, $model, $key)  {

                    return Html::a('', ['/admin/euro-two/update' , 'id'=> $key], ['class' => 'glyphicon glyphicon-pencil']);

                },
                'view' => function ($url, $model, $key)   {

                    return Html::a('', ['/admin/euro-two/view', 'id'=> $key], ['class' => 'glyphicon glyphicon-eye-open']);

                },
                'delete' => function ($url, $model, $key)   {

                    return Html::a('', ['/admin/euro-two/delete', 'id'=> $key], ['class' => 'glyphicon glyphicon-trash',
                        'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?', 'data-method' =>'POST']);

                },

            ], 'template' => '{view}{update}{delete}']
        ],
    ]); ?>
</div>


<div class="euro-one-index">

    <h1>ТАБЫ ТРЕТИЕ</h1>

    <p>
        <?= Html::a('Создать', ['/admin/euro-three/create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $data3,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'text:ntext',

            ['class' => 'yii\grid\ActionColumn', 'buttons'=>[
                'update' => function ($url, $model, $key)  {

                    return Html::a('', ['/admin/euro-three/update' , 'id'=> $key], ['class' => 'glyphicon glyphicon-pencil']);

                },
                'view' => function ($url, $model, $key)   {

                    return Html::a('', ['/admin/euro-three/view', 'id'=> $key], ['class' => 'glyphicon glyphicon-eye-open']);

                },
                'delete' => function ($url, $model, $key)   {

                    return Html::a('', ['/admin/euro-three/delete', 'id'=> $key], ['class' => 'glyphicon glyphicon-trash',
                        'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?', 'data-method' =>'POST']);

                },

            ], 'template' => '{view}{update}{delete}']
        ],
    ]); ?>
</div>
