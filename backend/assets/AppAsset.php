<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/lib/font-awesome/css/font-awesome.css',
        'css/lib/Ionicons/css/ionicons.css',
        'css/lib/perfect-scrollbar/css/perfect-scrollbar.css',
        'css//lib/jquery-switchbutton/jquery.switchButton.css',
        'css//lib/rickshaw/rickshaw.min.css',
        'css/lib/chartist/chartist.css',
        'css/bracket.css',
    ];
    public $js = [
        'js/lib/jquery/jquery.js',
        'js/lib/popper.js/popper.js',
        'js/lib/bootstrap/bootstrap.js',
        'js/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js',
        'js/lib/moment/moment.js',
        'js/lib/jquery-ui/jquery-ui.js',
        'js/lib/jquery-switchbutton/jquery.switchButton.js',
        'js/lib/peity/jquery.peity.js',
        'js/lib/chartist/chartist.js',
        'js/lib/jquery.sparkline.bower/jquery.sparkline.min.js',
        'js/lib/d3/d3.js',
        'js/lib/rickshaw/rickshaw.min.js',
        'js/bracket.js',
        'js/ResizeSensor.js',
        'js/dashboard.js',
        'js/js.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
