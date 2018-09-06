<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div id="modalka_pol_kons" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div id="site_modal_konsult">


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
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text81">
                                    <span id="site_uid111"><strong>Заполните форму</strong></span>
                                </div>

                                <?= $form->field($call, 'name', ['errorOptions'=>['class'=>'error-modal']])->textInput(['id' => 'name_in13', 'placeholder' => 'Ваше имя*', 'required' => ''])->label(false)  ?>

                                <?= $form->field($call, 'phone', ['errorOptions'=>['class'=>'error-modal']])->widget(\yii\widgets\MaskedInput::className(), [
                                    'mask' =>['+7(999)999-99-99', '+375(99)999-99-99', '+380(999)999-99-99'], 'clientOptions' => [/*'clearIncomplete'=>true, Нужно ввести все символы*/ ],
                                    'options' => ['id'=>'phone_in3', 'placeholder' => 'Ваш телефон*', 'required' => '' ]
                                ])->label(false); ?>

                                <input type="submit" id="Button11" name="" value="Отправить">
                            </div>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
