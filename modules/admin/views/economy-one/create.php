<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EconomyOne */

$this->title = 'Создать вкладку первый таб - ЭКОНОМ';
$this->params['breadcrumbs'][] = ['label' => 'Economy Ones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="economy-one-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
