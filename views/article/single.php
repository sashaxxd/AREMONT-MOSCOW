<?php
$this->registerCssFile('/css/article.css', ['depends' => ['app\assets\AppAsset']]);//Кидаем ниже файлов в ассете
$this->registerJsFile('/js/index.js',  ['depends' => 'app\assets\AppAsset']);
?>


<div id="article_slider_count">
    <div id="slider_count">
        <div class="row">
            <div class="col-1">
                <div id="article_Text6">
                    <span id="article_uid0">
                           <a href="<?= \yii\helpers\Url::home()?>" style="color: #ffffff; text-decoration: none;"
                           > Главная</a> / <?= $article->title?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="article_block_art13">
    <div id="block_art13">
        <div class="row">

            <div class="col-2">

                    <div id="article_Text8">
                        <span id="article_uid7"><?= $article->title?></span>
                    </div>
                    <hr id="Line1">
                    <div id="article_Text9">
                        <span id="article_uid8"><?= $article->content ?></span>
                    </div>





                <div id="article_block_art7">
                    <div id="block_art7">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="article_Text1">
                    <span id="article_uid11">ОСТАВИТЬ ЗАЯВКУ</span>
                </div>
                <hr id="Line6">
                <div id="article_block_art52">
                    <div id="block_art52">
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
                <div id="article_Text11">
                    <span id="article_uid1">УСЛУГИ:</span>
                </div>
                <hr id="Line5">
                <div id="article_block_art47">
                    <div id="block_art47">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>

                    <?= \app\components\LeftMenuWidget::widget();?>

                <div id="article_block_art17">
                    <div id="block_art17">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="article_Text12">
                    <span id="article_uid2">СТАТЬИ:</span>
                </div>
                <hr id="Line4">
                <div id="article_block_art46">
                    <div id="block_art46">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>



                <?= \app\components\LatestArticlesWidget::widget();?>




                <div id="article_block_art45">
                    <div id="block_art45">
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