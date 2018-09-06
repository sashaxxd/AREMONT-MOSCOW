<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StandartThree */

$this->title = 'Изменить: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Standart Threes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="standart-three-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
