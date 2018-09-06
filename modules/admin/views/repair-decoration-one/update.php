<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RepairDecorationOne */

$this->title = 'Изменить: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Repair Decoration Ones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="repair-decoration-one-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
