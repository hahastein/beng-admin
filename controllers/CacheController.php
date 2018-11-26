<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/12
 * Time: 23:04
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;
use bengbeng\admin\models\setting\ARSettingPage;
use yii\db\ActiveQuery;

class CacheController extends BaseController
{

    public function actionAll(){

        $settingPage = new ARSettingPage();
        $pageData = $settingPage->dataSet(function (ActiveQuery $query){
            $query->orderBy([
                'page_id' => SORT_DESC
            ]);
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
        
        \Yii::$app->Beng->outHtml($pageData);

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