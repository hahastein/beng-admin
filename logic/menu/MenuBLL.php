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

namespace bengbeng\admin\logic\menu;

use bengbeng\admin\logic\LogicLayerInterface;
use bengbeng\admin\logic\LogicOperateInterface;
use bengbeng\admin\models\menu\ARMenu;
use yii\helpers\ArrayHelper;

class MenuBLL implements LogicLayerInterface, LogicOperateInterface
{
    public function __construct()
    {
    }

    public function getData(){

        $arMenu = new ARMenu();
        $dataSet = $arMenu->findByMenuType(10);

        $dropDownData = ArrayHelper::map($dataSet, 'menu_id', 'menu_name');

        return ['dataSet' => $dataSet, 'dropdown' => $dropDownData];
    }

    public function save()
    {
        // TODO: Implement save() method.
    }
}