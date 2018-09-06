<?php
$this->registerCssFile('/css/euro.css', ['depends' => ['app\assets\AppAsset']]);
$this->registerCssFile('/css/tabs.css', ['depends' => ['app\assets\AppAsset']]);
$this->registerJsFile('/js/tabs.js',  ['depends' => 'app\assets\AppAsset']);
$this->registerJsFile('/js/index.js',  ['depends' => 'app\assets\AppAsset']);
?>
<div id="euro_slider_count">
    <div id="slider_count">
        <div class="row">
            <div class="col-1">
                <div id="euro_Text6">
                    <span id="euro_uid0">
                         <a href="<?= \yii\helpers\Url::home()?>" style="color: #ffffff; text-decoration: none;"
                         > Главная</a> / <?= $euro->title ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="euro_block13">
    <div id="block13">
        <div class="row">

            <div class="col-2">
                <div id="euro_Text8">
                    <span id="euro_uid7"><?= $euro->title ?></span>
                </div>
                <hr id="Line1">
                <div id="euro_Text9">
                    <span id="euro_uid8"><?= $euro->text ?> </span>
                </div>
                <div class="tabs  vertical">

                    <ul class="tabs__caption">
                        <?php $i=0;  foreach ($EuroOne as  $item): ?>
                        <?php $i++ ?>
                        <li
                         <?php   if($i == 1): ?>
                         class="active"
                                <?php endif; ?>
                        ><?= $item->name ?></li>

                        <?php endforeach; ?>
                    </ul>
                    <?php $i=0;  foreach ($EuroOne as  $item): ?>
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
                <div id="euro_block1">
                    <div id="block1">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="euro_Text45">
                    <span id="euro_uid9">ЧТО ВХОДИТ В СТОИМОСТЬ?</span>
                </div>
                <hr id="Line2">
                <div id="euro_block4">
                    <div id="block4">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs  vertical">

                    <ul class="tabs__caption">
                        <?php $i=0;  foreach ($EuroTwo as  $item): ?>
                            <?php $i++ ?>
                            <li
                                <?php   if($i == 1): ?>
                                    class="active"
                                <?php endif; ?>
                            ><?= $item->name ?></li>

                        <?php endforeach; ?>
                    </ul>
                    <?php $i=0;  foreach ($EuroTwo as  $item): ?>
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
                <div id="euro_block2">
                    <div id="block2">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="euro_Text5">
                    <span id="euro_uid10">ЧТО НЕ ВХОДИТ В СТОИМОСТЬ?</span>
                </div>
                <hr id="Line3">
                <div id="euro_block6">
                    <div id="block6">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs  vertical">

                    <ul class="tabs__caption">
                        <?php $i=0;  foreach ($EuroThree as  $item): ?>
                            <?php $i++ ?>
                            <li
                                <?php   if($i == 1): ?>
                                    class="active"
                                <?php endif; ?>
                            ><?= $item->name ?></li>

                        <?php endforeach; ?>
                    </ul>
                    <?php $i=0;  foreach ($EuroThree as  $item): ?>
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
                <div id="euro_block7">
                    <div id="block7">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="euro_Text1">
                    <span id="euro_uid11">ОСТАВИТЬ ЗАЯВКУ</span>
                </div>
                <hr id="Line6">
                <div id="euro_block52">
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
                <div id="euro_Text11">
                    <span id="euro_uid1">УСЛУГИ:</span>
                </div>
                <hr id="Line5">
                <div id="euro_block47">
                    <div id="block47">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <?= \app\components\LeftMenuWidget::widget();?>
                <div id="euro_block17">
                    <div id="block17">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="euro_Text12">
                    <span id="euro_uid2">СТАТЬИ:</span>
                </div>
                <hr id="Line4">
                <div id="euro_block46">
                    <div id="block46">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>


                <?= \app\components\LatestArticlesWidget::widget();?>


                <div id="euro_block45">
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
