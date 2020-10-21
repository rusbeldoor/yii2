<?php

namespace backend\components;

/**
 * Меню
 */
class Menu extends \rusbeldoor\yii2General\components\Menu
{
    function __construct()
    {
        if (in_array('administrator', $this->parentModulesIds)) {
            $menu[] = ['label' => 'Главная', 'url' => ['/site']];
        }

        $this->addAuthorisation(['register' => false]);
    }
}
