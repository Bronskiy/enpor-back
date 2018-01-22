<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;
use common\assets\Html5shiv;

/**
 * Frontend application asset
 */
class FrontendAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $basePath = '@webroot';
    /**
     * @var string
     */
    public $baseUrl = '@web';

    /**
     * @var array
     */
    public $css = [
        'dist/libraries/slick/slick.css',
        'dist/libraries/slick/slick-theme.css',
        'dist/libraries/other/swiper/css/swiper.min.css',
        'dist/css/trackpad-scroll-emulator.css',
        'dist/css/chartist.min.css',
        'dist/css/jquery.raty.css',
        'dist/fonts/font-awesome/css/font-awesome.min.css',
        'dist/css/nouislider.min.css',
        'dist/css/animate.css',
        'dist/css/normalize.css',
        'dist/libraries/bootstrap/css/bootstrap.min.css',
    //    'dist/libraries/flipclock/css/flipclock.css',
        'dist/css/enpor-gold.css',
    ];

    /**
     * @var array
     */
    public $js = [
      'dist/js/jquery.js',
      'dist/js/tether.min.js',
      'dist/js/bootstrap.min.js',
      'dist/js/chartist.min.js',
      'dist/js/jquery.trackpad-scroll-emulator.min.js',
      'dist/js/jquery.inlinesvg.min.js',
      'dist/js/jquery.affix.js',
      'dist/js/jquery.scrollTo.js',
      'dist/libraries/slick/slick.min.js',
      'dist/js/nouislider.min.js',
      'dist/js/jquery.raty.js',
      'dist/js/wNumb.js',
    //  'dist/libraries/flipclock/js/flipclock.js',
      'dist/js/constellation.js',
      'dist/js/jquery.parallax.js',
      'dist/libraries/other/swiper/js/swiper.min.js',
      'dist/libraries/other/jquery.downCount.js',
      'dist/libraries/other/jquery.maximage.js',
      'dist/libraries/other/vegas.min.js',
      'dist/libraries/other/wow.min.js',
      'dist/libraries/other/jquery.knob.min.js',
      'dist/js/explorer.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        Html5shiv::class,
    ];
}
