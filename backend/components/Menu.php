<?php

namespace backend\components;

/**
 * Меню
 */
class Menu extends \rusbeldoor\yii2General\components\Menu
{
    public $menu = [
        '' => [],
        'admin' => [
            ['label' => 'Главная', 'url' => ['/site']],
            ['label' => '|', 'url' => false],
        ],
    ];
}
