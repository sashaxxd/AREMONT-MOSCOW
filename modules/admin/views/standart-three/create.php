<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StandartThree */

$this->title = 'Создать вкладку третий таб - СТАНДАРТ';
$this->params['breadcrumbs'][] = ['label' => 'Standart Threes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="standart-three-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
