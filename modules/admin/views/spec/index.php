<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'СПЕЦ. ПРЕДЛОЖЕНИЯ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spec-index">

    <h1><?= Html::encode($this->title) ?></h1>

<!--    <p>-->
<!--        --><?//= Html::a('Create Spec', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'text:html',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}{update}'],
        ],
    ]); ?>
</div>
