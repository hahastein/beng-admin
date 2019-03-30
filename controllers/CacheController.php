<?php
/**
 * Copyright    : BengBeng Framework Inc.
 * Author       : hahastein(146119@qq.com)
 * Url          : http://www.52beng.com
 * CreateTime   : 2018/11/12 23:04
 * Description  : 缓存功能
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\AdminBaseController;

/**
 * Class CacheController
 * @author hahastein
 * @package bengbeng\admin\controllers
 */
class CacheController extends AdminBaseController
{

    public function actionAll(){

        $cache = \Yii::$app->cache;

        return $this->render('all');
    }

    public function actionRemove(){
        \Yii::$app->cache->flush();
    }

    public function behaviors()
    {
        self::setActions([
            'index', 'remove'
        ]);
        return parent::behaviors();
    }
}