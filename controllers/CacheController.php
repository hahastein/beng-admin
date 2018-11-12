<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/12
 * Time: 23:04
 */

namespace bengbeng\admin\controllers;


use bengbeng\framework\controllers\base\FactoryController;

class CacheController extends FactoryController
{

    public function actionAll(){

        $cache = \Yii::$app->cache;
        $cache->flush();

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