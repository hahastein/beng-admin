<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/9
 * Time: 21:27
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;
use bengbeng\admin\models\setting\ARSettingPage;
use bengbeng\framework\base\data\ActiveOperate;

class SettingController extends BaseController
{

    /**
     * 系统基础设置
     * @return string
     */
    public function actionSysBase(){

        return $this->render('sys-base');
    }

    public function actionTemplate(){

    }

    public function actionPage(){
        $resource = [
//            'js' => [
//                'pages/dashboard/ecommerce-dashboard.min.js'
//            ],
            'css' => [
                'css/widget.css'
            ]
        ];

        //拼接数据
        $dataParam = [
            'title' => '首页',
            'template_id' => 1,
            'last_time' => time(),
            'resource_file' => serialize($resource)
        ];

        $settingPage = new ARSettingPage();
        if($settingPage->dataUpdate(function (ActiveOperate $operate) use ($dataParam){
            $operate->params($dataParam);
            $operate->where([
                'router' => 'home/main'
            ]);
        })){
            //更新缓存
            $cache_name = 'template_'.md5('home/main');
            $cache = \Yii::$app->cache;
            if($cache->exists($cache_name)){
                $cache->set($cache_name, $dataParam);
            }else{
                $cache->add($cache_name, $dataParam);
            }


        }else{
            \Yii::$app->Beng->outHtml('更新失败');

        }



        return $this->render('page');
    }

    public function behaviors()
    {
        self::setActions([
            'sys-base', 'page'
        ]);
        return parent::behaviors();
    }
}