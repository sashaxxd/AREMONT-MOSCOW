<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;

$this->registerJsFile('/js/index.js',  ['depends' => 'app\assets\AppAsset']);


use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <div class="content">
<div id="site_fix">
    <div id="fix">
        <div class="row">
            <div class="col-1">
                <div id="site_menu_header">
                    <label class="toggle" for="menu_header-submenu" id="menu_header-title">МЕНЮ<span id="menu_header-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                    <input type="checkbox" id="menu_header-submenu">
                    <ul class="menu_header" id="menu_header">
                        <li><a href="<?= \yii\helpers\Url::to(['/admin/home'])?>">ГЛАВНАЯ</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/admin/slider'])?>">СЛАЙДЕР</a></li>
                        <li>
                            <label for="menu_header-submenu-1" class="toggle">ВИДЫ РЕМОНТА<b class="arrow-down"></b></label>
                            <a href="javascript:void(0)">ВИДЫ РЕМОНТА<b class="arrow-down"></b></a>
                            <input type="checkbox" id="menu_header-submenu-1">
                            <ul>
                                <li><a href="<?= \yii\helpers\Url::to(['/admin/euro-one'])?>">ЕВРО-РЕМОНТ</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/admin/standart-one'])?>">СТАНДАРТ</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/admin/economy-one'])?>">ЭКОНОМ</a></li>
                            </ul>

                        </li>
                        <li><a href="<?= \yii\helpers\Url::to(['/admin/repair-decoration-one'])?>">РЕМ. И ОТД.</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/admin/interior-design-one'])?>">ДИЗ. ИНТ.</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/admin/portfolio'])?>">ПОРТФОЛИО</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/admin/article'])?>">СТАТЬИ</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['reviews/index'])?>">ОТЗЫВЫ</a></li>
                        <li>
                            <label for="menu_header-submenu-1" class="toggle">ДОПОЛНИТЕЛЬНО<b class="arrow-down"></b></label>
                            <a href="javascript:void(0)">ДОПОЛНИТЕЛЬНО<b class="arrow-down"></b></a>
                            <input type="checkbox" id="menu_header-submenu-1">
                            <ul>
                                <li><a href="<?= \yii\helpers\Url::to(['/admin/sale'])?>">АКЦИИ</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/admin/spec'])?>">СПЕЦ ПРЕДЛОЖЕНИЯ</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/admin/price'])?>">ЦЕНЫ НА УСЛУГИ</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/admin/contact'])?>">КОНТАКТЫ</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/admin/additionally'])?>">ТЕЛЕФОНЫ - ДАННЫЕ</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/admin/menu'])?>">ЛЕВОЕ МЕНЮ</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/admin/pages'])?>">СТРАНИЦЫ ЛЕВОГО МЕНЮ</a></li>
                            </ul>

                        </li>
                    </ul>
                </div>
                <div id="site_line_menu">
                    <div id="line_menu">
                        <div class="row">
                            <div class="col-1">
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="site_header">
    <div id="header">
        <div class="row">
            <div class="col-1">

                <div id="site_count_sl">
                    <div id="count_sl">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text2">
                                    &nbsp;
                                </div>
                                <div id="site_txt_sl1">
                                    <span id="site_uid2"><strong>ВЫ НАХОДИТЕСЬ В ПАНЕЛИ АДМИНИСТРАТОРА САЙТА</strong></span>
                                </div>
                                <div id="site_txt_sl2">
                                    <a href="<?= \yii\helpers\Url::to(['/auth/logout'])?>" style="text-decoration: none;">
                                    <span id="site_uid3">ВЫЙТИ </span>
                                    </a>
                                        <span id="site_uid4"> ИЗ ПАНЕЛИ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





        <?php if (Yii::$app->session->hasFlash('success')): ?>
            <div id="mess_msg-cntain">
                <div id="msg-cntain">
                    <div class="row">
                        <div class="col-1">
                            <div id="mess_message_ok">
                                <div id="message_ok">
                                    <div class="row">
                                        <div class="col-1">
                                            <div id="mess_message_text">
                                                <span id="mess_uid0"><?php echo Yii::$app->session->getFlash('success'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div id="mess_message_close">
                                                <div id="message_close"><i class="fa fa-window-close">&nbsp;</i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (Yii::$app->session->hasFlash('error')): ?>
            <div id="message_msg-cntain-error">
                <div id="msg-cntain-error">
                    <div class="row">
                        <div class="col-1">
                            <div id="message_message_error">
                                <div id="message_error">
                                    <div class="row">
                                        <div class="col-1">
                                            <div id="message_message_error_text">
                                                <span id="message_uid0"><?php echo Yii::$app->session->getFlash('error'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div id="message_message_close_error">
                                                <div id="message_close_error"><i class="fa fa-window-close">&nbsp;</i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

<div id="content_admin" style="width: 1280px;  margin: auto; padding: 50px 0px 50px 0px; max-width: 100%; ">
<?= $content ?>
</div>
    </div>
    <div class="footer">
<div id="site_footer">
    <div id="footer">
        <div class="row">
            <div class="col-1">
                <div id="site_Text64">
<!--                    <span id="site_uid108">ИП ТРАЛЯЛЯ<br>ТЕЛ: 522342424<br></span>-->
                </div>
            </div>
            <div class="col-2">
<!--                <div id="site_vk_ic">-->
<!--                    <a href="#"><img src="/images/vk.png" id="vk_ic" alt=""></a>-->
<!--                </div>-->
<!--                <div id="site_fb_ic">-->
<!--                    <a href="#"><img src="/images/faceb.png" id="fb_ic" alt=""></a>-->
<!--                </div>-->
<!--                <div id="site_inst_ic">-->
<!--                    <a href="#"><img src="/images/inst.png" id="inst_ic" alt=""></a>-->
<!--                </div>-->
            </div>
            <div class="col-3">
                <div id="site_Text82">
                    <span id="site_uid109">2018 © Все права защищены</span><span id="site_uid110"><br></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modalka_pol_kons" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div id="site_modal_konsult">
                    <form name="form3" method="post" action="send.php" id="modal_konsult">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text81">
                                    <span id="site_uid111"><strong>Заполните форму</strong></span>
                                </div>
                                <input type="text" id="name_in13" name="Editbox1" value="" spellcheck="false" placeholder="&#1042;&#1072;&#1096;&#1077; &#1080;&#1084;&#1103;*" required="">
                                <input type="text" id="phone_in3" name="Editbox1" value="" spellcheck="false" placeholder="&#1042;&#1072;&#1096; &#1090;&#1077;&#1083;&#1077;&#1092;&#1086;&#1085;*" required="">
                                <input type="submit" id="Button11" name="" value="Отправить">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
