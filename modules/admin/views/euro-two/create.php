<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EuroTwo */

$this->title = 'Создать вкладку второй таб - ЕВРО-РЕМОНТ';
$this->params['breadcrumbs'][] = ['label' => 'Euro Twos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="euro-two-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
