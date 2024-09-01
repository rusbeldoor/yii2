<?php

namespace common\assets;

/**
 * Class AssetBundle
 * @package common\assets
 */
class AssetBundle extends \yii\web\AssetBundle
{
    public $sourcePath = '@common/web';

    public $css = [
        'css/common.css',
    ];

    public $js = [
        'js/common.js',
    ];

    public $depends = [
        'rusbeldoor\yii2General\common\assets\AssetBundle',
    ];
}
