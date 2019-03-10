<?php

namespace bengbeng\admin\controllers;

use bengbeng\framework\base\Enum;
use bengbeng\framework\controllers\base\FactoryController;
use Yii;

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
    public function actionAll()
    {
        return $this->render('all');
    }

//    public function behaviors()
//    {
//        self::setActions([
//            ''
//        ]);
//        return parent::behaviors();
//    }
}
