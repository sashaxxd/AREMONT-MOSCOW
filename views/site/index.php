<?php

$this->registerJsFile('/js/swiper.jquery.min.js',  ['depends' => 'app\assets\AppAsset']);
$this->registerJsFile('/js/script.js',  ['depends' => 'app\assets\AppAsset']);
$this->registerJsFile('/js/index.js',  ['depends' => 'app\assets\AppAsset']);

?>
<div id="site_slider_count">
    <div id="slider_count">
        <div class="row">
            <div class="col-1">
                <div id="site_slider">
                    <div id="slider">
                        <div class="row">
                            <div class="col-1">

                                <?php $on = $EnableSlider->enable; if($on == 1):  ?>

                                <div class="ares-slider swiper-container-horizontal">

                                    <div class="swiper-wrapper">
                                        <?php $i=0; foreach ($sliders as $slide): ?>
                                        <?php $i++; $img = $slide->getImage(); ?>
                                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0">
                                            <div class="img-container" style="background: url(<?= '/' . str_replace('\\', '/', $img->getPath()); ?>) center no-repeat"></div>
                                            <div class="slide_header">
                                                <div class="app1" id="site_uid6"></div>
                                                <h1><?= $slide->title ?></h1><br>
                                                <h2><?= $slide->title2 ?></h2><br>
                                                <a href="<?= \yii\helpers\Url::to($slide->link)?>" class="areas_ankor">ПОДРОБНЕЕ</a>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>


                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-indication"></div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="site_tree_count">
    <div id="tree_count">
        <div class="row">
            <div class="col-1">
                <div class="banner" style="border: 2px solid #B22222; background-color: #B22222;">
                <div id="site_block7">
                    <div id="block7">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text5">
                                    <span id="site_uid7">ЕВРО-РЕМОНТ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block8">
                    <div id="block8">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block1">
                    <div id="block1">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text1">
                                    <span id="site_uid8">РАБОТЫ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block26">
                    <div id="block26">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text23">
                                    <span id="site_uid9"><strong><?= $euro->job ?></strong> РУБ. М²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block4">
                    <div id="block4">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text18">
                                    <span id="site_uid10">ЧЕРНОВЫЕ МАТЕРИАЛЫ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block28">
                    <div id="block28">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text25">
                                    <span id="site_uid11"><strong><?= $euro->material1 ?></strong> РУБ. М²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block22">
                    <div id="block22">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text20">
                                    <span id="site_uid12">ЧИСТОВЫЕ МАТЕРИАЛЫ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block30">
                    <div id="block30">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text27">
                                    <span id="site_uid13"><strong><?= $euro->material2 ?></strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>



                <div id="site_block24">
                    <div id="block24">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>


                <div id="site_Shape1">
                    <a href="<?=\yii\helpers\Url::to(['/services/euro-repair']) ?>"><div id="Shape1"><div id="Shape1_text"><span id="site_uid14">ПОДРОБНЕЕ</span></div></div></a>
                </div>

            </div>
            <div class="col-2">
                <div class="banner" style="border: 2px solid #B22222; background-color: #B22222;">
                <div id="site_block9">
                    <div id="block9">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text6">
                                    <span id="site_uid15">СТАНДАРТ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block10">
                    <div id="block10">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block25">
                    <div id="block25">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text22">
                                    <span id="site_uid16">РАБОТЫ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block2">
                    <div id="block2">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text17">
                                    <span id="site_uid17"><strong><?= $standard->job ?></strong> РУБ. М²ФФ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block27">
                    <div id="block27">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text24">
                                    <span id="site_uid18">ЧЕРНОВЫЕ МАТЕРИАЛЫ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block6">
                    <div id="block6">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text19">
                                    <span id="site_uid19"><strong><?= $standard->material1 ?></strong> РУБ. М²Ф</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block29">
                    <div id="block29">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text26">
                                    <span id="site_uid20">ЧИСТОВЫЕ МАТЕРИАЛЫ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block23">
                    <div id="block23">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text21">
                                    <span id="site_uid21"><strong><?= $standard->material2 ?></strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div id="site_block31">
                    <div id="block31">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_Shape2">
                    <a href="<?=\yii\helpers\Url::to(['/services/standard']) ?>"><div id="Shape2"><div id="Shape2_text"><span id="site_uid22">ПОДРОБНЕЕ</span></div></div></a>
                </div>
            </div>
            <div class="col-3">
                <div class="banner" style="border: 2px solid #B22222; background-color: #B22222;">
                <div id="site_block11">
                    <div id="block11">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text7">
                                    <span id="site_uid23">ЭКОНОМ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block12">
                    <div id="block12">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block32">
                    <div id="block32">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text28">
                                    <span id="site_uid24">РАБОТЫ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block33">
                    <div id="block33">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text29">
                                    <span id="site_uid25"><strong><?= $economy->job ?></strong> РУБ. М²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block34">
                    <div id="block34">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text30">
                                    <span id="site_uid26">ЧЕРНОВЫЕ МАТЕРИАЛЫ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block35">
                    <div id="block35">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text31">
                                    <span id="site_uid27"><strong><?= $economy->material1 ?></strong> РУБ. М²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block36">
                    <div id="block36">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text32">
                                    <span id="site_uid28">ЧИСТОВЫЕ МАТЕРИАЛЫ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block37">
                    <div id="block37">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text33">
                                    <span id="site_uid29"><strong><?= $economy->material2 ?></strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div id="site_block38">
                    <div id="block38">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_Shape3">
                    <a href="<?=\yii\helpers\Url::to(['/services/economy']) ?>"><div id="Shape3"><div id="Shape3_text"><span id="site_uid30">ПОДРОБНЕЕ</span></div></div></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="site_block13">
    <div id="block13">
        <div class="row">

            <div class="col-2">
                <div id="site_Text8">
                    <span id="site_uid37">О НАС</span>
                </div>
                <hr id="Line1">
                <div id="site_Text9">
                    <span id="site_uid38">
                       <?= $home->content ?>
                        </span>
                </div>
                <div id="site_block14">
                    <div id="block14">
                        <div class="row">
                            <div class="col-1">
                                <div class="pod_div_title_img">
                                </div>
                                <div class="pod_div_title">
                                    ГРАМОТНАЯ КОНСУЛЬТАЦИЯ<br>СПЕЦИАЛИСТА<br>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="pod_div_title_img2">
                                </div>
                                <div class="pod_div_title">
                                    ТОЛЬКО КВАЛИФИЦИРОВАННЫЕ РАБОТНИКИ
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_Text40">
                    <span id="site_uid39">НАШИ ПРЕИМУЩЕСТВА</span>
                </div>
                <hr id="Line2">
                <div id="site_block42">
                    <div id="block42">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block39">
                    <div id="block39">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Image1">
                                    <img src="images/benefit-1.png" id="Image1" alt="">
                                </div>
                                <div id="site_Text34">
                                    <span id="site_uid40"><br>НЕ ВЫХОДИМ<br> ЗА РАМКИ СМЕТЫ</span>
                                </div>
                            </div>
                            <div class="col-2">
                                <div id="site_Image2">
                                    <img src="images/benefit-2.png" id="Image2" alt="">
                                </div>
                                <div id="site_Text35">
                                    <span id="site_uid41"><br>ГАРАНТИЯ<br> НА ВСЕ ВИДЫ РАБОТ</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="site_Image3">
                                    <img src="images/benefit-3.png" id="Image3" alt="">
                                </div>
                                <div id="site_Text36">
                                    <span id="site_uid42"><br>ПОЭТАПНАЯ<br> ОПЛАТА РАБОТ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block40">
                    <div id="block40">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Image4">
                                    <img src="images/benefit-4.png" id="Image4" alt="">
                                </div>
                                <div id="site_Text37">
                                    <span id="site_uid43"><br>ПОНЯТНЫЕ<br> И ПРОЗРАЧНЫЕ СМЕТЫ</span>
                                </div>
                            </div>
                            <div class="col-2">
                                <div id="site_Image5">
                                    <img src="images/benefit-5.png" id="Image5" alt="">
                                </div>
                                <div id="site_Text38">
                                    <span id="site_uid44"><br>ОФИЦИАЛЬНЫЙ<br> ДОГОВОР</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="site_Image6">
                                    <img src="images/benefit-8.png" id="Image6" alt="">
                                </div>
                                <div id="site_Text39">
                                    <span id="site_uid45"><br>ДОПОЛНИТЕЛЬНЫЕ<br> CКИДКИ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_Text44">
                    <span id="site_uid46">ОТЗЫВЫ</span>
                </div>
                <hr id="Line3">
                <div id="site_block43">
                    <div id="block43">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_block41">
                    <div id="block41">
                        <div class="row">
                            <?php foreach ($reviews as $review): ?>
                            <div class="col-1">
                                <div class="otz_div_title">
                                  <?=  $review->otzyv ?>
                                </div>
                                <div id="site_Shape4">
                                    <canvas class="Shape4" height="30" width="22"></canvas>
                                </div>
                                <div id="site_Text41">
                                    <span id="site_uid47"><?=  $review->name ?></span><span id="site_uid48"> | <strong><?=  $review->city?></strong></span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div id="site_block50">
                    <div id="block50">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Shape7">
                                    <a href="<?= \yii\helpers\Url::to(['/reviews'])?>"><div id="Shape7"><div id="Shape7_text"><span id="site_uid53">ВСЕ ОТЗЫВЫ</span></div></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_Text45">
                    <span id="site_uid54">ОСТАВИТЬ ЗАЯВКУ</span>
                </div>
                <hr id="Line6">
                <div id="site_block52">
                    <div id="block52">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>


                <?= \app\components\FormFooterWidget::widget();?>


                <div id="site_Text46">
                    <span id="site_uid55">ПОРТФОЛИО</span>
                </div>
                <hr id="Line7">
                <div id="site_block54">
                    <div id="block54">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>

                <?php  foreach ($portfolio as $item): ?>
                <div id="site_block55">
                    <div id="block55">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text49">
                                    <span id="site_uid56">ДО РЕМОНТА</span>
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
                                    <div class="SlideShow_array_back"><a id="site_uid58"><img alt="Back" id="site_uid59" src="images/left3_m.png"></a></div>
                                    <div class="SlideShow_array_next"><a id="site_uid60"><img alt="Next" id="site_uid61" src="images/right3_m.png"></a></div>
                                </ul>
                            </div>
                            <div class="col-2">
                                <div id="site_Text50">
                                    <span id="site_uid62">ПОСЛЕ РЕМОНТА</span>
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
                                    <div class="SlideShow_array_back"><a id="site_uid64"><img alt="Back" id="site_uid65" src="images/left3_m.png"></a></div>
                                    <div class="SlideShow_array_next"><a id="site_uid66"><img alt="Next" id="site_uid67" src="images/right3_m.png"></a></div>
                                </ul>
                            </div>
                            <div class="col-3">
                                <div id="site_Text47">
                                    <span id="site_uid68"><?= $item->title ?></span>
                                </div>
                                <div id="site_Text48">
                                    <span id="site_uid69"><?= $item->text ?> </span>
                                </div>
                                <div id="site_Text16">
                                    <span id="site_uid70">Срок работ:</span><span id="site_uid71"> <?= $item->srok ?></span>
                                </div>
                                <div id="site_Shape11">
                                    <a href="" onclick="$('#modalka_pol_kons').modal('show');return false;"><div id="Shape11"><div id="Shape11_text"><span id="site_uid72">ОСТАВИТЬ ЗАЯВКУ</span></div></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  endforeach; ?>

                <div id="site_block59">
                    <div id="block59">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>

                    <div id="block63">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>




            <div class="col-1">
                <?= \app\components\PlachkiWidget::widget();?>
                <div id="site_Text11">
                    <span id="site_uid31">УСЛУГИ:</span>
                </div>
                <hr id="Line5">
                <div id="site_block47">
                    <div id="block47">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>


                    <?= \app\components\LeftMenuWidget::widget();?>


                <div id="site_block17">
                    <div id="block17">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_Text12">
                    <span id="site_uid32">СТАТЬИ:</span>
                </div>
                <hr id="Line4">
                <div id="site_block46">
                    <div id="block46">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>


                <?= \app\components\LatestArticlesWidget::widget();?>



                <div id="site_block45">
                    <div id="block45">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div id="site_block64">
                    <div id="block64">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Shape8">
                                    <a href="<?= \yii\helpers\Url::to(['/portfolio'])
                                    ?>"><div id="Shape8"><div id="Shape8_text"><span id="site_uid107">ВСЕ РАБОТЫ</span></div></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>