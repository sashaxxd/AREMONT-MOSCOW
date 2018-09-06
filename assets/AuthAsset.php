<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css',
        'css/index.css',
        'css/site.css',
        'css/style.css',
        'css/auth.css',
    ];
    public $js = [
        'js/jquery-1.12.4.min.js',
        'js/scrollspy.min.js',
        'js/parallax.min.js',
        'js/transition.min.js',
        'js/modal.min.js',
        'js/script.min.js',
        'js/jquery-ui.min.js',


        'js/main.js',
        'js/index.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

    public $jsOptions = [ 'position' => \yii\web\View::POS_END ];
}
