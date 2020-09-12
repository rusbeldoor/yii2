<?php

namespace common\assets;

/**
 * Class AssetBundle
 * @package common\assets
 */
class AssetBundle extends \yii\web\AssetBundle
{
    public $sourcePath = '@common/web';
    public $css = [];
    public $js = [];
    public $depends = [
        'common\assets\fontawesome\AssetBundle',
        'rusbeldoor\yii2General\common\assets\AssetBundle',
    ];
}