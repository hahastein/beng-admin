<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/24
 * Time: 0:14
 */

namespace bengbeng\admin\controllers;


use bengbeng\framework\base\Enum;
use bengbeng\framework\controllers\base\FactoryController;

class AuthController extends FactoryController
{
    public $layout = '@bengbeng/admin/views/layouts/login';

    public function actionLogin()
    {
        return $this->render('login');
    }

    public function behaviors()
    {
        self::setActions([
            'login'
        ], Enum::ACCESS_RULE_NULL);
        return parent::behaviors();
    }

}