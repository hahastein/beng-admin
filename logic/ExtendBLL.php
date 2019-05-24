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


use bengbeng\framework\base\BaseLogic;
use bengbeng\framework\components\ifc\LogicLayerInterface;
use bengbeng\framework\models\ExtendARModel;

class ExtendBLL extends BaseLogic implements LogicLayerInterface
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

}