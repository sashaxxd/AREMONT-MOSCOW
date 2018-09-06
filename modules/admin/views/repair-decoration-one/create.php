<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RepairDecorationOne */

$this->title = 'Создать вкладку для табов - РЕМОНТ И ОТДЕЛКА';
$this->params['breadcrumbs'][] = ['label' => 'Repair Decoration Ones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repair-decoration-one-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
