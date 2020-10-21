<?php

namespace backend\components;

use Yii;
use yii\helpers\html;

/**
 * Меню
 */
class Menu
{
    /**
     * Получение меню
     *
     * @return array
     */
    public static function get()
    {
        $menu = [];

        switch (Yii::$app->controller->module->id) {
            case 'administrator':
                $menu[] = ['label' => 'Главная', 'url' => ['/site']];
                break;

            default:
        }

        if (count($menu)) {
            $menu[] = ['label' => '|', 'url' => false];
        }

        if (Yii::$app->user->isGuest) {
            $menu[] = ['label' => 'Вход', 'url' => ['/site/login']];
        } else {
            $menu[] =
                '<li class="nav-item">'
                . Html::beginForm(['/site/logout'], 'post') . Html::submitButton('Выход (' . Yii::$app->user->identity->username . ')', ['class' => 'btn nav-link']) . Html::endForm()
                . '</li>';
        }

        return $menu;
    }
}
