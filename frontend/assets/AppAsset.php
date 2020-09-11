<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'rusbeldoor\yii2General\common\assets\AssetBundle',
        'rusbeldoor\yii2General\frontend\assets\AssetBundle',
        'QuickService\fonts\quickserviceicons\yii2\AssetBundle',
        'QuickService\fonts\fontawesome\yii2\AssetBundle',
    ];
}
