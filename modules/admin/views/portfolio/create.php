<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Portfolio */

$this->title = 'Добавить работу в портфолио';
$this->params['breadcrumbs'][] = ['label' => 'Portfolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
