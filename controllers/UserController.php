<?php

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\AdminBaseController;
use Yii;

/**
 * UserController implements the CRUD actions for Menu model.
 *
 * @author hahastein <146119@qq.com>
 * @since 1.0
 */
class UserController extends AdminBaseController
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
