<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EconomyThree */

$this->title = 'Создать вкладку третий таб - ЭКОНОМ';
$this->params['breadcrumbs'][] = ['label' => 'Economy Threes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="economy-three-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
