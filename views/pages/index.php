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
                         > Главная</a> / <?= $page->name ?>
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
                    <span id="design_uid7"><?= $page->name ?></span>
                </div>
                <hr id="Line1">

                <div id="design_Text9">
                    <span id="design_uid8"><?= $page->content ?> </span>
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

