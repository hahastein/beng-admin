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

use bengbeng\framework\base\BaseLogic;
use bengbeng\framework\base\Enum;
use Yii;
use bengbeng\admin\models\menu\ARMenu;
use bengbeng\framework\components\ifc\LogicLayerInterface;
use bengbeng\framework\components\ifc\LogicOperateInterface;
use yii\db\ActiveQuery;
use yii\db\Exception;
use yii\helpers\ArrayHelper;

/**
 * Class MenuBLL
 * @author hahastein <146119@qq.com>
 * @package bengbeng\admin\logic\menu
 */
class MenuBLL extends BaseLogic implements LogicLayerInterface, LogicOperateInterface
{

    private $arMenu;

    public function __construct()
    {
        $this->arMenu = new ARMenu();
    }

    public function getList(){

        $dataSet = $this->arMenu->findByMenuType(10);

        $dropDownData = ArrayHelper::map($dataSet, 'menu_id', 'menu_name');

        return ['dataSet' => $dataSet, 'dropdown' => $dropDownData];
    }

    public function getOne($id)
    {
        // TODO: Implement getOne() method.
    }

    /**
     * @param null $dataParam
     * @return bool|mixed
     */
    public function save($dataParam = null)
    {
        try{
            if(!$dataParam){
                throw new Exception('1、没有填写相关数据\n2、直接访问了不该访问的地址\n3、非法访问，请使用正确来源访问');
            }

            if(empty($dataParam['parent_id'])){
                throw new Exception('选择父级菜单');
            }

            $menuData = $this->arMenu->dataOne(function (ActiveQuery $query) use($dataParam){
                $query->where(['menu_name' => $dataParam['menu_name']]);
            });

            if($menuData){
                throw new Exception('菜单存在');
            }

            $parentData = $this->arMenu->dataOne(function (ActiveQuery $query) use($dataParam){
                $query->where(['menu_id' => $dataParam['parent_id']]);
            });

            if(!$parentData){
                throw new Exception('父级菜单不存在');
            }

            $dataParam['module'] = Yii::$app->controller->module->id;
            $dataParam['menu_cate'] = $parentData['menu_cate'];
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