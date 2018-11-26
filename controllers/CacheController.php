<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/12
 * Time: 23:04
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;

class CacheController extends BaseController
{

    public function actionAll(){

        return $this->render('all');
    }

    public function behaviors()
    {
        self::setActions([
            'index'
        ]);
        return parent::behaviors();
    }
}