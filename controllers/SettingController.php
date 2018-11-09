<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/9
 * Time: 21:27
 */

namespace bengbeng\admin\controllers;


use bengbeng\framework\controllers\base\FactoryController;

class SettingController extends FactoryController
{

    /**
     * 系统基础设置
     * @return string
     */
    public function actionSysBase(){

        return $this->render('sys-base');
    }

    public function behaviors()
    {
        self::setActions([
            'sys-base'
        ]);
        return parent::behaviors();
    }
}