<?php

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;
use bengbeng\admin\models\setting\ARSettingPage;
use Yii;

/**
 * MenuController implements the CRUD actions for Menu model.
 *
 * @author hahastein <146119@qq.com>
 * @since 1.0
 */
class PageController extends BaseController
{

    public function actionResources(){

        $model = new ARSettingPage();
        $dataSet = $model->findByAll();

        $cache = \Yii::$app->cache;

        foreach ($dataSet as $key => $item){
            $unData = unserialize($item['resource_file']);
            $item['js_resource'] = isset($unData['js'])?$unData['js']:[];
            $item['css_resource'] = isset($unData['css'])?$unData['css']:[];
            unset($item['resource_file']);
            //是否存在缓存
            $cache_name = 'template_'.md5($item['router']);
            $isCache = $cache->exists($cache_name)?:false;
            $item['isCache'] = $isCache;
            $dataSet[$key] = $item;
        }

        return $this->render('resources', ['dataSet' => $dataSet]);

    }

    public function behaviors()
    {
        self::setActions([
            'resources'
        ]);
        return parent::behaviors();
    }
}
