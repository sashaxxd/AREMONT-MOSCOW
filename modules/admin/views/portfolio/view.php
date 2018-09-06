<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Portfolio */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Portfolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $img = $model->getImage();?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'text:ntext',
            'srok',
//            [
//                'attribute' => 'image',
//                'value' => "<img src='{$img->getUrl('300x')}'>",
//                'format' => 'html',
//            ],
        ],
    ]) ?>

</div>
<?php
$before_repair = \app\models\BeforeRepair::find()->where(['child_id' => $model->id])->one();
$after_repair = \app\models\AfterRepair::find()->where(['child_id' => $model->id])->one()

?>
<h1>ДО РЕМОНТА</h1>
<br>
<hr>
<?php $images = $before_repair->getImages(); ?>
<?php  foreach ($images as $image): ?>
       <img class="image" src="<?= '/' . $image->getPath('100x') ?>" alt="" title="">
<?php endforeach;?>
<br>
<hr>
    <h1>ПОСЛЕ РЕМОНТА</h1>
<br>
<hr>
<?php $images = $after_repair->getImages(); ?>
<?php  foreach ($images as $image): ?>
    <img class="image" src="<?= '/' . $image->getPath('100x') ?>" alt="" title="">
<?php endforeach;?>
<br>
<hr>
