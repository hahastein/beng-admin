<?php

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;
use Yii;
use yii\web\NotFoundHttpException;

/**
 * MenuController implements the CRUD actions for Menu model.
 *
 * @author hahastein <146119@qq.com>
 * @since 1.0
 */
class MenuController extends BaseController
{

    public function actionAll(){

        return $this->render('all');
    }

    public function behaviors()
    {
        self::setActions([
            'create'
        ]);
        return parent::behaviors();
    }
}
