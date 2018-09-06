<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Interior Design Ones';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="interior-design-one-index">

    <h1>ДИЗАЙН ИНТЕРЬЕРА - ОСНОВНОЙ ТЕКСТ</h1>



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

<div class="interior-design-one-index">

    <h1>Табы</h1>

    <p>
        <?= Html::a('Создать вкладку', ['create'], ['class' => 'btn btn-success']) ?>
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
