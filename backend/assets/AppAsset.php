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
        // 'css/site.css',
        # mengubah tampilan dengan menggunakan bootstrap & fresh table
        'bootstrap/css/bootstrap.css',
        'fresh-table/css/fresh-bootstrap-table.css',
    ];

    #menggunakan jquery dan hal yang berkaitan dengan desain UI pada js
    public $js = [
        'jquery-3.2.1.min.js',
        'popper/dist/umd/popper.js',
        'bootstrap/js/bootstrap.js',
        // 'fresh-table/js/bootstrap-table.js',
    ];
    // public $depends = [
    //     'yii\web\YiiAsset',
    //     'yii\bootstrap\BootstrapAsset',
    // ];
}
