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
        'css/frontend.css',
    ];

    public $js = [
        'js/frontend.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'common\assets\AssetBundle',
        'rusbeldoor\yii2General\frontend\assets\AssetBundle',
    ];
}
