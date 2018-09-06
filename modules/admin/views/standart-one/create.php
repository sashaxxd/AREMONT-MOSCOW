<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StandartOne */

$this->title = 'Создать вкладку первый таб - СТАНДАРТ';
$this->params['breadcrumbs'][] = ['label' => 'Standart Ones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="standart-one-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
