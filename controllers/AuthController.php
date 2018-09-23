<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/24
 * Time: 0:14
 */

namespace bengbeng\admin\controllers;


use bengbeng\framework\controllers\base\FactoryController;

class AuthController extends FactoryController
{
    public function actionLogin()
    {
        return $this->render('login');
    }

    public function behaviors()
    {
        return self::setActions([
            'login'
        ]);
    }
}