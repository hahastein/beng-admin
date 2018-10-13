<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/10/13
 * Time: 21:47
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;
use bengbeng\framework\base\Enum;

class HomeController extends BaseController
{

    public function actionMain(){
        \Yii::$app->Beng->outHtml('main');
    }

    public function behaviors()
    {
        self::setActions([
            'main'
        ], Enum::ACCESS_RULE_AUTHENTICATED);
        return parent::behaviors();
    }
}