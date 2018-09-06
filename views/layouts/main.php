<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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
<?php
$Additionally = \app\models\Additionally::find()->all();
    ?>
<div id="site_fix">
    <div id="fix">
        <div class="row">
            <div class="col-1">
                <div id="site_menu_header">
                    <label class="toggle" for="menu_header-submenu" id="menu_header-title">МЕНЮ<span id="menu_header-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                    <input type="checkbox" id="menu_header-submenu">
                    <ul class="menu_header" id="menu_header">
                        <li><a href="<?= \yii\helpers\Url::home()?>">ГЛАВНАЯ</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['services/repair-decoration'])?>">РЕМОНТ И ОТДЕЛКА</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/portfolio'])?>">ПОРТФОЛИО</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['services/interior-design'])?>">ДИЗАЙН ИНТЕРЬЕРА</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/price'])?>">ЦЕНЫ НА УСЛУГИ</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/article'])?>">ЭКО СТАТЬИ</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/reviews'])?>">ОТЗЫВЫ</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/contact'])?>">КОНТАКТЫ</a></li>
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
                <div id="site_logo_phone">
                    <div id="logo_phone">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_logo">
                                    <img src="/images/logo.png" id="logo" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                            </div>
                            <div class="col-3">
                                <div id="site_phone_h">
                                    <span id="site_uid0"><?= $Additionally[0]->text ?></span>
                                </div>
                                <div id="site_button_header">
                                    <a href="" onclick="$('#modalka_pol_kons').modal('show');return false;"><div id="button_header"><div id="button_header_text"><span id="site_uid1">ОСТАВИТЬ ЗАЯВКУ</span></div></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_count_sl">
                    <div id="count_sl">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Text2">
                                    &nbsp;
                                </div>
                                <div id="site_txt_sl1">
                                    <span id="site_uid2"><strong>РЕМОНТ КВАРТИР В МОСКВЕ ПОД КЛЮЧ</strong></span>
                                </div>
                                <div id="site_txt_sl2">
                                    <span id="site_uid3">ДОСТУПНАЯ</span><span id="site_uid4"> ЦЕНА - КАЧЕСТВО</span>
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

<?= $content ?>


<div id="site_footer">
    <div id="footer">
        <div class="row">
            <div class="col-1">
                <div id="site_Text64">
                    <span id="site_uid108"><?= $Additionally[1]->text ?><br>ТЕЛ: <?= $Additionally[0]->text ?><br></span>
                </div>
            </div>
            <div class="col-2">
                <div id="site_vk_ic">
                    <a href="<?= $Additionally[2]->text ?>"><img src="/images/vk.png" id="vk_ic" alt=""></a>
                </div>
                <div id="site_fb_ic">
                    <a href="<?= $Additionally[3]->text ?>"><img src="/images/faceb.png" id="fb_ic" alt=""></a>
                </div>
                <div id="site_inst_ic">
                    <a href="<?= $Additionally[4]->text ?>"><img src="/images/inst.png" id="inst_ic" alt=""></a>
                </div>
            </div>
            <div class="col-3">
                <div id="site_Text82">
                    <span id="site_uid109">2018 © Все права защищены</span><span id="site_uid110"><br></span>
                </div>
            </div>
        </div>
    </div>
</div>

<?= \app\components\FormButtonWidget::widget();?>


<div id="top_button">
    <div id="site_Image7">
        <a href="#header"><img src="/images/top_but2.png" id="Image7" alt=""></a></div>
</div>
<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
