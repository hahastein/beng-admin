<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/25
 * Time: 14:37
 */

namespace bengbeng\admin\models\menu;

use bengbeng\framework\models\platform\MenuARModel;
use yii\db\ActiveQuery;

class ARMenu extends MenuARModel
{

    public function findByParentID($parentID){
        return $this->findByAll($parentID);
    }

    public function findByMenuType($type){
        return $this->findByAll(0, $type);
    }

    public function findByAll($parentID, $menu_type = null){
        return $this->dataSet(function (ActiveQuery $query) use ($parentID, $menu_type){
            $query->select(['menu_id', 'menu_name', 'menu_icon', 'module', 'controller', 'action', 'parent_id', 'order', 'initials', 'is_home']);

            $query->where([
                'parent_id' => $parentID
            ]);

            if(isset($menu_type)){
                $query->andWhere(['menu_type' => $menu_type]);
            }

            $query->orderBy([
                'parent_id' => SORT_ASC,
                'order' => SORT_ASC
            ]);
            $query->asArray();
        });
    }
}