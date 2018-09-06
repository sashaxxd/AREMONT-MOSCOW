<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EconomyTwo */

$this->title = 'Создать вкладку второй таб - ЭКОНОМ';
$this->params['breadcrumbs'][] = ['label' => 'Economy Twos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="economy-two-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
