<?php
/**
 * 52Beng Framework Admin
 *
 * @link http://www.52beng.com
 * @copyright Copyright © 2019 52Beng Framework. All rights reserved.
 * @author hahastein <146119@qq.com>
 * @license http://www.52beng.com/license
 * @date 2019/5/24 12:45
 */

namespace bengbeng\admin\logic;

use Yii;
use bengbeng\framework\base\BaseLogic;
use bengbeng\framework\components\ifc\LogicLayerInterface;
use bengbeng\framework\components\ifc\LogicOperateInterface;
use bengbeng\framework\models\ExtendARModel;
use yii\db\ActiveQuery;
use yii\db\Exception;

class ExtendBLL extends BaseLogic implements LogicLayerInterface, LogicOperateInterface
{

    public function __construct()
    {
        $this->model = new ExtendARModel();
    }

    public function getList()
    {
        $dataSet = $this->model->findByAll();

        foreach ($dataSet as $key => $item){
            if(is_file(\Yii::getAlias('@vendor/bengbeng-extend/'.$item['extend_name'].'/bengextend.lock'))){
                $dataSet[$key]['isSetup'] = true;
            }else{
                $dataSet[$key]['isSetup'] = false;
            }
        }

        return $dataSet;
    }

    public function getOne($id)
    {
        // TODO: Implement getOne() method.
    }

    public function save($dataParam = null)
    {
        try{
            if(!$dataParam){
                throw new Exception('参数异常');
            }

            $data = $this->model->dataOne(function (ActiveQuery $query) use($dataParam){
                $query->where(['extend_name' => $dataParam['extend_name']]);
            });

            if($data){
                throw new Exception('菜单存在');
            }

            $dataParam['module'] = Yii::$app->controller->module->id;
            $dataParam['addtime'] = time();
            $dataParam['admin_id'] = Yii::$app->user->identity->admin_id;

            $this->arMenu->setAttributes($dataParam, false);
            if ($this->arMenu->validate() && $this->arMenu->save()) {

                Yii::$app->cache->delete(Enum::CACHE_MENU_DATA);

                return true;

            } else {
                throw new Exception('添加失败');
            }
        }catch (Exception $ex){
            $this->error = $ex->getMessage();
            return false;
        }
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

}