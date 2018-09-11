<?php

namespace bengbeng\admin\controllers;

use bengbeng\framework\controllers\base\FactoryController;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * UserController implements the CRUD actions for Menu model.
 *
 * @author hahastein <146119@qq.com>
 * @since 1.0
 */
class UserController extends FactoryController
{

    /**
     * Lists all Menu models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function behaviors()
    {
        return self::setActions([
            'index'
        ]);
    }
}
