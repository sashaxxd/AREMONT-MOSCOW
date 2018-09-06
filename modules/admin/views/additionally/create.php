<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Additionally */

$this->title = 'Create Additionally';
$this->params['breadcrumbs'][] = ['label' => 'Additionallies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="additionally-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
