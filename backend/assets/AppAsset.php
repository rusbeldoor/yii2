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
        'css/yii2-backend.css',
    ];

    public $js = [
        'js/yii2-backend.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'common\assets\AssetBundle',
        'rusbeldoor\yii2General\backend\assets\AssetBundle',
    ];
}
