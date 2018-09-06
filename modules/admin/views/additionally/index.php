<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Телефоны - данные';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="additionally-index">

    <h1><?= Html::encode($this->title) ?></h1>

<!--    <p>-->
<!--        --><?//= Html::a('Create Additionally', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'text:ntext',

            ['class' => 'yii\grid\ActionColumn',  'template' => '{view}{update}'],
        ],
    ]); ?>
</div>
