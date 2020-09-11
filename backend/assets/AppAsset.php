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
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'rusbeldoor\yii2-general\common\assets\AssetBundle',
        'rusbeldoor\yii2-general\backend\assets\AssetBundle',
        'QuickService\fonts\quickserviceicons\yii2\AssetBundle',
        'QuickService\fonts\fontawesome\yii2\AssetBundle',
    ];
}
