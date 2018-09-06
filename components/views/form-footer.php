<?php
use yii\widgets\ActiveForm;

?>
<div id="site_block51">
    <div id="block51">
        <div class="row">
            <?php $form = ActiveForm::begin(['id' => 'modal_konsult',
//                                            'enableAjaxValidation'   => true,
//                                            'enableClientValidation' => false,
//                                            'validateOnBlur'         => false,
//                                            'validateOnType'         => false,
//                                            'validateOnChange'       => false,
//                                            'validateOnSubmit'       => false,
                'enableClientValidation'=>false,
                'enableClientScript' => false //отключает скрипты на клиенте

            ]); ?>



            <div class="col-1">

                <?= $form->field($call, 'name', ['errorOptions'=>['class'=>'error-modal']])->textInput(['id' => 'name', 'placeholder' => 'Ваше имя*', 'required' => ''])->label(false)  ?>
            </div>
            <div class="col-2">



                <?= $form->field($call, 'phone', ['errorOptions'=>['class'=>'error-modal']])->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' =>['+7(999)999-99-99', '+375(99)999-99-99', '+380(999)999-99-99'], 'clientOptions' => [/*'clearIncomplete'=>true, Нужно ввести все символы*/ ],
                    'options' => ['id'=>'phone', 'placeholder' => 'Ваш телефон*', 'required' => '' ]
                ])->label(false); ?>


            </div>
            <div class="col-3">
                <input type="submit" id="Button_form" name="" value="ОСТАВИТЬ ЗАЯВКУ">
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>