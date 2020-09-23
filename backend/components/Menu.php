<?php

namespace backend\components;

use yii\helpers\ArrayHelper;

/**
 * Меню
 */
class Menu extends \rusbeldoor\yii2General\components\Menu
{
    /**
     * Поучение меню
     *
     * @return array
     */
    public function get()
    {
        return ArrayHelper::merge(
            [
                ['label' => 'Главная', 'url' => ['/site']],
                ['label' => '|', 'url' => false],
            ],
            parent::menu()
        );
    }
}
