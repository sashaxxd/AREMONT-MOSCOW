<?php
$this->registerCssFile('/css/portfolio.css', ['depends' => ['app\assets\AppAsset']]);//Кидаем ниже файлов в ассете
$this->registerJsFile('/js/index.js',  ['depends' => 'app\assets\AppAsset']);
?>
<div id="portfolio_slider_count">
    <div id="slider_count">
        <div class="row">
            <div class="col-1">
                <div id="portfolio_Text6">
                    <span id="portfolio_uid0">
                          <a href="<?= \yii\helpers\Url::home()?>" style="color: #ffffff; text-decoration: none;"
                          > Главная</a> / ПОРТФОЛИО
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="portfolio_block13">
    <div id="block13">
        <div class="row">

            <div class="col-2">
                <div id="portfolio_Text5">
                    <span id="portfolio_uid7">ПОРТФОЛИО</span>
                </div>
                <hr id="Line1">
                <div id="portfolio_block54">
                    <div id="block54">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>


                <?php  foreach ($portfolio as $item): ?>
                <div id="portfolio_block55">
                    <div id="block55">
                        <div class="row">
                            <div class="col-1">


                                <div id="portfolio_Text49">
                                    <span id="portfolio_uid8">ДО РЕМОНТА</span>
                                </div>

                                <ul class="SlideShow_array">
                                    <?php  $gallery = $item->bef->getImages(); ?>
                                    <?php if (count($gallery) > '1'): ?>
                                    <?php  foreach ($gallery as $img): ?>
                                    <li><img class="image" src="<?= '/' . $img->getPath() ?>" alt="" title=""></li>
                                    <?php endforeach ?>
                                    <?php
                                      endif;
                                    ?>
                                    <div class="SlideShow_array_back"><a id="portfolio_uid10"><img alt="Back" id="portfolio_uid11" src="/images/left3_m.png"></a></div>
                                    <div class="SlideShow_array_next"><a id="portfolio_uid12"><img alt="Next" id="portfolio_uid13" src="/images/right3_m.png"></a></div>

                                </ul>
                            </div>
                            <div class="col-2">
                                <div id="portfolio_Text50">
                                    <span id="portfolio_uid14">ПОСЛЕ РЕМОНТА</span>
                                </div>
                                <ul class="SlideShow_array">
                                    <?php  $gallery = $item->aft->getImages(); ?>
                                    <?php if (count($gallery) > '1'): ?>
                                        <?php  foreach ($gallery as $img): ?>
                                            <li><img class="image" src="<?= '/' . $img->getPath() ?>" alt="" title=""></li>
                                        <?php endforeach ?>
                                        <?php
                                    endif;
                                    ?>
                                    <div class="SlideShow_array_back"><a id="portfolio_uid16"><img alt="Back" id="portfolio_uid17" src="/images/left3_m.png"></a></div>
                                    <div class="SlideShow_array_next"><a id="portfolio_uid18"><img alt="Next" id="portfolio_uid19" src="/images/right3_m.png"></a></div>
                                </ul>
                            </div>
                            <div class="col-3">
                                <div id="portfolio_Text47">
                                    <span id="portfolio_uid20"><?= $item->title ?></span>
                                </div>
                                <div id="portfolio_Text48">
                                    <span id="portfolio_uid21"><?= $item->text ?></span>
                                </div>
                                <div id="portfolio_Text16">
                                    <span id="portfolio_uid22">Срок работ: </span><span id="portfolio_uid23"><?= $item->srok ?></span>
                                </div>
                                <div id="portfolio_Shape11">
                                    <a href="" onclick="$('#modalka_pol_kons').modal('show');return false;"><div id="Shape11"><div id="Shape11_text"><span id="portfolio_uid24">ОСТАВИТЬ ЗАЯВКУ</span></div></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div id="portfolio_block54">
                        <div id="block54">
                            <div class="row">
                                <div class="col-1">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  endforeach; ?>

                <!-- Пагинация-->
                <?php
                echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pages,
                    ]
                );
                ?>
                <!-- /Пагинация-->


                <div id="portfolio_Text1">
                    <span id="portfolio_uid25">ОСТАВИТЬ ЗАЯВКУ</span>
                </div>
                <hr id="Line6">
                <div id="portfolio_block52">
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
                <div id="portfolio_Text11">
                    <span id="portfolio_uid1">УСЛУГИ:</span>
                </div>
                <hr id="Line5">
                <div id="portfolio_block47">
                    <div id="block47">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>

                    <?= \app\components\LeftMenuWidget::widget();?>

                <div id="portfolio_block17">
                    <div id="block17">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="portfolio_Text12">
                    <span id="portfolio_uid2">СТАТЬИ:</span>
                </div>
                <hr id="Line4">
                <div id="portfolio_block46">
                    <div id="block46">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>


                <?= \app\components\LatestArticlesWidget::widget();?>



                <div id="portfolio_block45">
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