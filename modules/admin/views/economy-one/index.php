<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ЭКОНОМ РЕМОНТ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="euro-one-index">

    <h1>ЭКОНОМ РЕМОНТ - ОСНОВНОЙ ТЕКСТ</h1>

    <?= GridView::widget([
        'dataProvider' => $main,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'text:ntext',
            ['class' => 'yii\grid\ActionColumn', 'buttons'=>[
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
        <?= Html::a('Создать', ['/admin/economy-two/create'], ['class' => 'btn btn-success']) ?>
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

                    return Html::a('', ['/admin/economy-two/update' , 'id'=> $key], ['class' => 'glyphicon glyphicon-pencil']);

                },
                'view' => function ($url, $model, $key)   {

                    return Html::a('', ['/admin/economy-two/view', 'id'=> $key], ['class' => 'glyphicon glyphicon-eye-open']);

                },
                'delete' => function ($url, $model, $key)   {

                    return Html::a('', ['/admin/economy-two/delete', 'id'=> $key], ['class' => 'glyphicon glyphicon-trash',
                        'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?', 'data-method' =>'POST']);

                },

            ], 'template' => '{view}{update}{delete}']
        ],
    ]); ?>
</div>


<div class="euro-one-index">

    <h1>ТАБЫ ТРЕТИЕ</h1>

    <p>
        <?= Html::a('Создать', ['/admin/economy-three/create'], ['class' => 'btn btn-success']) ?>
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

                    return Html::a('', ['/admin/economy-three/update' , 'id'=> $key], ['class' => 'glyphicon glyphicon-pencil']);

                },
                'view' => function ($url, $model, $key)   {

                    return Html::a('', ['/admin/economy-three/view', 'id'=> $key], ['class' => 'glyphicon glyphicon-eye-open']);

                },
                'delete' => function ($url, $model, $key)   {

                    return Html::a('', ['/admin/economy-three/delete', 'id'=> $key], ['class' => 'glyphicon glyphicon-trash',
                        'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?', 'data-method' =>'POST']);

                },

            ], 'template' => '{view}{update}{delete}']
        ],
    ]); ?>
</div>
