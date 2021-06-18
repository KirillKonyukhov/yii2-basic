<?php

namespace app\modules\admin\controllers;

use yii\web\Сontroller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends AppAdminController 
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
