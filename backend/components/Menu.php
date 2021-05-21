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
            $this->menu[] = [
                'label' => 'Система',
                'items' => [
                    ['label' => 'Платформы', 'url' => ['/administrator/platform']],
                    '-',
                    ['label' => 'Операции', 'url' => ['/administrator/rbac/permission']],
                    ['label' => 'Роли', 'url' => ['/administrator/rbac/role']],
                    '-',
                    ['label' => 'Кроны', 'url' => ['/administrator/cron']],
                ],
            ];
        }

        $this->addAuthorisation(['register' => false]);
    }
}
