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

        $cache = \Yii::$app->cache;

        \Yii::$app->Beng->outHtml($cache->get('system_menu_data'));

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