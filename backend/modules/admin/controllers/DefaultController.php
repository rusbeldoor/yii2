<?php

namespace backend\modules\admin\controllers;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends \backend\components\Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
