<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StandartTwo */

$this->title = 'Создать вкладку второй таб - СТАНДАРТ';
$this->params['breadcrumbs'][] = ['label' => 'Standart Twos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="standart-two-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
