<?php
$this->registerCssFile('/css/design.css', ['depends' => ['app\assets\AppAsset']]);
$this->registerCssFile('/css/tabs.css', ['depends' => ['app\assets\AppAsset']]);
$this->registerJsFile('/js/tabs.js',  ['depends' => 'app\assets\AppAsset']);
$this->registerJsFile('/js/index.js',  ['depends' => 'app\assets\AppAsset']);
?>
<div id="design_slider_count">
    <div id="slider_count">
        <div class="row">
            <div class="col-1">
                <div id="design_Text6">
                    <span id="design_uid0">
                        <a href="<?= \yii\helpers\Url::home()?>" style="color: #ffffff; text-decoration: none;"
                  > Главная</a> / <?= $repair->title ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="design_block13">
    <div id="block13">
        <div class="row">

            <div class="col-2">
                <div id="design_Text8">
                    <span id="design_uid7"><?= $repair->title ?></span>
                </div>
                <hr id="Line1">
                <div id="design_block2">
                    <div id="block2">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs  vertical">

                    <ul class="tabs__caption">
                        <?php $i=0;  foreach ($RepairOne as  $item): ?>
                            <?php $i++ ?>
                            <li
                                <?php   if($i == 1): ?>
                                    class="active"
                                <?php endif; ?>
                            ><?= $item->name ?></li>

                        <?php endforeach; ?>
                    </ul>
                    <?php $i=0;  foreach ($RepairOne as  $item): ?>
                        <?php $i++ ?>
                        <div class="tabs__content
                      <?php   if($i == 1): ?>
                      active
                       <?php endif; ?>
                      ">
                            <?= $item->text ?>
                        </div>
                    <?php endforeach; ?>
                </div><!-- .tabs -->
                <div id="design_block1">
                    <div id="block1">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="design_Text9">
                    <span id="design_uid8"><?= $repair->text ?></span>
                </div>
                <div id="design_Text1">
                    <span id="design_uid9">ОСТАВИТЬ ЗАЯВКУ</span>
                </div>
                <hr id="Line6">
                <div id="design_block52">
                    <div id="block52">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <?= \app\components\FormFooterWidget::widget();?>
            </div>

            <div class="col-1">
                <?= \app\components\PlachkiWidget::widget();?>
                <div id="design_Text11">
                    <span id="design_uid1">УСЛУГИ:</span>
                </div>
                <hr id="Line5">
                <div id="design_block47">
                    <div id="block47">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <?= \app\components\LeftMenuWidget::widget();?>
                <div id="design_block17">
                    <div id="block17">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="design_Text12">
                    <span id="design_uid2">СТАТЬИ:</span>
                </div>
                <hr id="Line4">
                <div id="design_block46">
                    <div id="block46">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>


                <?= \app\components\LatestArticlesWidget::widget();?>

                <div id="design_block45">
                    <div id="block45">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>