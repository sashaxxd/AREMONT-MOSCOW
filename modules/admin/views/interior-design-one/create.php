<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\InteriorDesignOne */

$this->title = 'Создать вкладку для табов - ДИЗАЙН ИНТЕРЬЕРОВ';
$this->params['breadcrumbs'][] = ['label' => 'Interior Design Ones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interior-design-one-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
