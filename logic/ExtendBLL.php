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

use bengbeng\framework\base\Enum;
use bengbeng\framework\components\handles\ExtendHandle;
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
            if(empty($dataParam)){
                throw new Exception('参数异常');
            }

            $data = $this->model->dataOne(function (ActiveQuery $query) use($dataParam){
                $query->where(['extend_name' => $dataParam['extend_name']]);
            });

            if($data){
                throw new Exception('扩展存在');
            }

            if(!array_key_exists('extend_vendor_path', $dataParam) || empty($dataParam['extend_vendor_path'])){
                $data['extend_vendor_path'] = $data['extend_name'];
            }

            $dataParam['createtime'] = time();
            $dataParam['admin_id'] = Yii::$app->user->identity->admin_id;
            $dataParam['extend_hash'] = hash_hmac('sha1', $dataParam['extend_name'].'|'.$dataParam['admin_id'].'|'.$dataParam['createtime'], 'bengbeng2018', true);
            $dataParam['extend_version'] = '1.0.0';

            $this->model->setAttributes($dataParam, false);
            if ($this->model->validate() && $this->model->save()) {

                //重新生成扩展文件
                $extendHandle = new ExtendHandle();
                $extendHandle->appendFile($dataParam);

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