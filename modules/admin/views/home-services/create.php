<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HomeServices */

$this->title = 'Create Home Services';
$this->params['breadcrumbs'][] = ['label' => 'Home Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-services-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
