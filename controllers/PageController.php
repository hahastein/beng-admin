<?php

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\AdminBaseController;
use bengbeng\admin\models\setting\ARSettingPage;
use Yii;
use yii\db\ActiveQuery;

/**
 * MenuController implements the CRUD actions for Menu model.
 *
 * @author hahastein <146119@qq.com>
 * @since 1.0
 */
class PageController extends AdminBaseController
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

    public function actionAddCache(){

        $pageID = Yii::$app->request->get('id');
        $model = new ARSettingPage();
        $pageInfo = $model->dataOne(function (ActiveQuery $query) use ($pageID){
            $query->select(['title', 'router', 'template_id', 'last_time', 'resource_file', 'css_order']);
            $query->where(['page_id' => $pageID]);
            $query->asArray();
        });

        if($pageInfo){
            $cache_name = 'template_'.md5($pageInfo['router']);
            unset($pageInfo['router']);
            $cache = \Yii::$app->cache;
            if(!$cache->exists($cache_name)){
                $cache->add($cache_name, $pageInfo);
                Yii::$app->Beng->outHtml('成功');

            }else{
                Yii::$app->Beng->outHtml('缓存已经存在');
            }
        }else{
            Yii::$app->Beng->outHtml('不存在的ID');
        }


    }

    public function behaviors()
    {
        self::setActions([
            'resources', 'add-cache'
        ]);
        return parent::behaviors();
    }
}
