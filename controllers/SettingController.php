<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/9
 * Time: 21:27
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\AdminBaseController;
use bengbeng\admin\models\setting\ARSettingPage;
use bengbeng\framework\base\data\ActiveOperate;
use yii\db\ActiveQuery;

class SettingController extends AdminBaseController
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
        $settingPage = new ARSettingPage();
        $pageData = $settingPage->dataSet(function (ActiveQuery $query){
            $query->orderBy([
                'page_id' => SORT_DESC
            ]);
            $query->asArray();
        });

        $cache = \Yii::$app->cache;
        foreach ($pageData as $key => $item) {
            $cache_name = 'template_'.md5($item['router']);

            if($cache->exists($cache_name)){
                $pageData[$key]['isCacheStr'] = '存在';
                $pageData[$key]['isCache'] = true;
            }else{
                $pageData[$key]['isCache'] = false;
                $pageData[$key]['isCacheStr'] = '不存在';
            }

        }
        return $this->render('page', ['data' => $pageData]);

    }

    public function actionPage1(){
        $resource = [
//            'js' => [
//                'pages/chart/float/jquery.flot.js',
//                'pages/chart/float/jquery.flot.categories.js',
//                'pages/chart/float/curvedLines.js',
//                'pages/chart/float/jquery.flot.tooltip.min.js',
//                'pages/dashboard/ecommerce-dashboard.min.js'
//            ],
            'css' => [
//                'css/widget.css'
                'css/pages.css'
            ]
        ];

        //拼接数据
        $dataParam = [
            'title' => '基础设置',
            'template_id' => 1,
            'last_time' => time(),
            'resource_file' => serialize($resource)
        ];

        $settingPage = new ARSettingPage();
        if($settingPage->dataUpdate(function (ActiveOperate $operate) use ($dataParam){
            $operate->params($dataParam);
            $operate->where([
                'router' => 'setting/sys-base'
            ]);
        })){
            //更新缓存
            $cache_name = 'template_'.md5('setting/sys-base');
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
            'sys-base', 'page', 'template'
        ]);
        return parent::behaviors();
    }
}