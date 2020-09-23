<?php

namespace backend\modules\admin;

use yii\helpers\ArrayHelper;

/**
 * admin module definition class
 */
class Module extends \backend\components\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'backend\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    /**
     * ...
     */
    public static function menu()
    {
        return ArrayHelper::merge(
            [
                ['label' => 'Главная', 'url' => ['/site/index']],
                ['label' => '|', 'url' => false],
            ],
            parent::menu()
        );
    }
}
