<?php
/**
 * 52Beng Framework Admin
 *
 * @link http://www.52beng.com
 * @copyright Copyright © 2019 52Beng Framework. All rights reserved.
 * @author hahastein <146119@qq.com>
 * @license http://www.52beng.com/license
 * @date 2019/3/31 1:06
 */

namespace bengbeng\admin\logic\admin;

use bengbeng\admin\logic\LogicLayerInterface;
use bengbeng\admin\models\AdminARModel;
use yii\db\ActiveQuery;

class AdminBLL implements LogicLayerInterface
{
    public function __construct()
    {
    }

    public function getData(){

        $adminModel = new AdminARModel();

        $adminData = $adminModel->dataSet(function (ActiveQuery $query){
            $query->orderBy(['created_at' => SORT_DESC]);
            $query->asArray();
        });

        return ['dataSet' => $adminData];
    }


}