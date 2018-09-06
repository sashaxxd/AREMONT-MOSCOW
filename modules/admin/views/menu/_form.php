<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->registerCssFile('/css/admin.css', ['depends' => ['app\assets\AppAsset']]);
/* @var $this yii\web\View */
/* @var $model app\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


    <?php $items = \yii\helpers\ArrayHelper::map($pages,'id','name');
    $params = [
        'prompt' => 'Выбрать cтраницу для этого пункта меню',

    ] ?>
    <?= $form->field($model, 'parent_id')->dropDownList($items,$params);?>

    <!--    --><?//= $form->field($model, 'parent_id')->textInput(['class' => 'input_form']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
