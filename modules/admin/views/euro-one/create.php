<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EuroOne */

$this->title = 'Создать вкладку первый таб - ЕВРО-РЕМОНТ';
$this->params['breadcrumbs'][] = ['label' => 'Euro Ones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="euro-one-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
