<?php

namespace frontend\components;

/**
 * Меню
 */
class Menu extends \rusbeldoor\yii2General\components\Menu
{
    function __construct()
    {
        $this->menu[] = ['label' => 'Главная', 'url' => ['/site/index']];

        $this->addAuthorisation();
    }
}
