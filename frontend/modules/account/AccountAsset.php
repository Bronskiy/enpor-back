<?php

namespace frontend\modules\account;

use yii\web\AssetBundle;
use yii\web\YiiAsset;
use common\assets\Html5shiv;

/**
 * Frontend application asset
 */
class AccountAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@frontend/app/';

    /**
     * @var array
     */
    public $css = [
        'css/plugins/bootstrap.min.css',
        'css/plugins/sidebar-nav.css',
        'css/plugins/jquery.toast.css',
        'css/plugins/cryptocoins/cryptocoins.css',
        'css/plugins/css-chart.css',
        'css/plugins/morris.css',
        'css/animate.css',
        'css/timeline.css',
        'css/style.css',
        'css/enpor-gold.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'js/plugins/bootstrap.min.js',
        'js/plugins/sidebar-nav.min.js',
        'js/plugins/jquery.slimscroll.js',
        'js/plugins/waves.js',
        'js/plugins/jquery.waypoints.min.js',
        'js/plugins/jquery.countdown.min.js',
        'js/plugins/jquery.counterup.min.js',
        'js/plugins/raphael-min.js',
        'js/plugins/morris.min.js',
        'js/plugins/jquery.sparkline.min.js',
        'js/plugins/jquery.charts-sparkline.js',
        'js/plugins/jquery.toast.js',
        'js/custom.js',
        'js/dashboard1.js',
        'js/timeline.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        YiiAsset::class,
        //BootstrapAsset::class,
        Html5shiv::class,
        //'frontend\assets\FontAwesomeAsset',
    ];
}
