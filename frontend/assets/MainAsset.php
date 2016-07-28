<?php

namespace frontend\assets;

use yii\web\AssetBundle;


class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'sourse/css/style.css',
        'sourse/css/slick.css',
        'sourse/css/nouislider.css',
        'sourse/css/font-awesome.css',
        'sourse/css/jquery.fancybox.css',
        'sourse/css/theme-color/orange-theme.css',
    ];
    public $js = [
        'sourse/js/jquery.min.js',
        'sourse/js/slick.js',
        'sourse/js/nouislider.js',
        'sourse/js/jquery.mixitup.js',
        'sourse/js/jquery.fancybox.pack.js',
        'sourse/js/custom.js',
        'sourse/js/bootstrap.js',
    ];
    public $font =[
        'https://fonts.googleapis.com/css?family=Vollkorn',
        'https://fonts.googleapis.com/css?family=Open+Sans',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
