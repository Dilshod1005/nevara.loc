<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       "css/meanmenu.min.css",
       "css/animate.css",
       "css/nivo-slider.css",
       "css/owl.carousel.min.css",
       "css/jquery-ui.min.css",
       "css/font-awesome.min.css",
       "css/pe-icon-7-stroke.css",
        "css/bootstrap.min.css",
        "css/default.css",
        "css/style.css",
        "css/responsive.css",
//        'css/site.css',
    ];
    public $js = [
        "js/ajax.js",
       "js/vendor/jquery-1.12.4.min.js",
        "js/jquery.meanmenu.min.js",
        "js/jquery.scrollUp.js",
        "js/owl.carousel.min.js",
        "js/wow.min.js",
        "js/jquery-ui.min.js",
        "js/jquery.elevateZoom-3.0.8.min.js",
        "js/jquery.nivo.slider.js",
        "js/bootstrap.min.js",
        "js/plugins.js",
        "js/main.js",
        "js/yii.activeForm.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
