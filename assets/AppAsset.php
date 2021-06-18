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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap-grid.css',
        'css/bootstrap-reboot.css',
        //'css/site.css',
        'css/style.css',
       'https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700',
       //'css/bootstrap.css',
       'css/animate.css',
       'css/owl.carousel.min.css',
        'css/aos.css',
        'css/bootstrap-datepicker.css',
        'css/jquery.timepicker.css',
        'css/magnific-popup.css',
       'css/ionicons.min.css',
        'css/font-awesome.min.css',
    ];
    public $js = [
        'js/aos.js',
        'js/bootstrap.min.js',
        'bootstrap-datepicker.js',
        'js/login.js',
        'js/jquery.magnific-popup.min.js',
        'js/jquery.stellar.min.js',
        'js/jquery.timepicker.min.js',
        'js/jquery.waypoints.min.js',
        'js/jquery-3.3.1.min.js',
        'js/jquery-migrate-3.0.1.min.js',
        'js/main.js',
        'js/owl.carousel.min.js',
        'js/popper.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
