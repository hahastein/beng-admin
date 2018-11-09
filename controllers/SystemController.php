<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/9
 * Time: 21:27
 */

namespace bengbeng\admin\controllers;


use bengbeng\framework\controllers\base\FactoryController;

class SystemController extends FactoryController
{

    /**
     * 系统基础设置
     * @return string
     */
    public function actionBaseSetting(){

        return $this->render('base-setting');
    }

    public function behaviors()
    {
        self::setActions([
            'base'
        ]);
        return parent::behaviors();
    }
}