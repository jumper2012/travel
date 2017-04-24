<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $sourcePath = '@bower/dshop/';
    public $css = [
        'css/font-awesome.css',
        'css/bootstrap.css',
        'css/jquery.smartmenus.bootstrap.css',
        'css/jquery.simpleLens.css',
        'css/slick.css',
        'css/nouislider.css',
        'css/theme-color/default-theme.css',
        'css/theme-color/bridge-theme.css',
        'css/sequence-theme.modern-slide-in.css',
        'css/style.css',
        'https://fonts.googleapis.com/css?family=Lato',
        'https://fonts.googleapis.com/css?family=Raleway',
      //  'css/site.css',
    ];
    public $js = [
        //'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
        'js/bootstrap.js',
        'js/jquery.smartmenus.js',
        'js/jquery.smartmenus.bootstrap.js',
        'js/jquery.smartmenus.bootstrap.js',
        'js/sequence.js',
        'js/sequence-theme.modern-slide-in.js',
        'js/jquery.simpleGallery.js',
        'js/jquery.simpleLens.js',
        'js/slick.js',
        'js/nouislider.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
