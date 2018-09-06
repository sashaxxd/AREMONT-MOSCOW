<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StandartTwo */

$this->title = 'Изменить: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Standart Twos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="standart-two-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
