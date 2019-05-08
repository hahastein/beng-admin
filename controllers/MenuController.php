<?php

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\AdminBaseController;
use bengbeng\admin\models\menu\ARMenu;
use bengbeng\framework\base\Enum;
use bengbeng\framework\models\platform\MenuARModel;
use Yii;
use yii\db\ActiveQuery;
use yii\db\Exception;
use yii\helpers\ArrayHelper;

/**
 * MenuController implements the CRUD actions for Menu model.
 *
 * @author hahastein <146119@qq.com>
 * @since 1.0
 */
class MenuController extends AdminBaseController
{

    public function actionAll(){

        $returnData = $this->getLogicLayer('menu.MenuBLL')->getList();
        var_dump(11);
        return $this->render('all', $returnData);
    }

    public function actionSave(){

        try {
            $menuModel = new MenuARModel();

            $postData = \Yii::$app->Beng->PostData([
                'menu_name' => 'menuName',
                'controller','action','menu_icon','initials',
                'parent_id' => 'parentMenu'
            ]);

            if(empty($postData['parent_id'])){
                throw new Exception('选择父级菜单');
            }

            $menuData = $menuModel->dataOne(function (ActiveQuery $query) use($postData){
                $query->where(['menu_name' => $postData['menu_name']]);
            });

            if($menuData){
                throw new Exception('菜单存在');
            }

            $parentData = $menuModel->dataOne(function (ActiveQuery $query) use($postData){
                $query->where(['menu_id' => $postData['parent_id']]);
            });

            if(!$parentData){
                throw new Exception('父级菜单不存在');
            }

            $postData['module'] = Yii::$app->controller->module->id;
            $postData['menu_cate'] = $parentData['menu_cate'];
            $postData['addtime'] = time();
            $postData['admin_id'] = Yii::$app->user->identity->admin_id;

            $menuModel->setAttributes($postData, false);
            if ($menuModel->validate() && $menuModel->save()) {

                Yii::$app->cache->delete(Enum::CACHE_MENU_DATA);

                \Yii::$app->Beng->outHtml('添加成功');

            } else {
                throw new Exception('添加失败');
            }
        }catch (Exception $ex){
            return $this->error($ex);
        }

    }

    public function behaviors()
    {
        self::setActions([
            'save'
        ]);
        return parent::behaviors();
    }
}
