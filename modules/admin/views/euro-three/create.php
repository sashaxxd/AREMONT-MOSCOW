<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EuroThree */

$this->title = 'Создать вкладку третий таб - ЕВРО-РЕМОНТ';
$this->params['breadcrumbs'][] = ['label' => 'Euro Threes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="euro-three-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
