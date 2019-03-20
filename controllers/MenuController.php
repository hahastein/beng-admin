<?php

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;
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
class MenuController extends BaseController
{

    public function actionAll(){

        $arMenu = new ARMenu();
        $dataSet = $arMenu->findByMenuType(10);

        $dropDownData = ArrayHelper::map($dataSet, 'menu_id', 'menu_name');

        return $this->render('all', ['dataSet' => $dataSet, 'dropdown' => $dropDownData]);

    }

    public function actionSave(){

        $menuModel = new MenuARModel();

        $postData = \Yii::$app->Beng->PostData([
            'menu_name' => 'menuName',
            'controller','action','menu_icon','initials',
            'parent_id' => 'parentMenu'
        ]);

        if(empty($postData['parent_id'])){
            \Yii::$app->Beng->outHtml('请选择父级菜单');
        }

        $menuData = $menuModel->dataOne(function (ActiveQuery $query) use($postData){
            $query->where(['menu_name' => $postData['menu_name']]);
        });

        if($menuData){
            \Yii::$app->Beng->outHtml('菜单存在');
        }

        $parentData = $menuModel->dataOne(function (ActiveQuery $query) use($postData){
            $query->where(['menu_id' => $postData['parent_id']]);
        });

        if(!$parentData){
            \Yii::$app->Beng->outHtml('父级菜单不存在');
        }

        $postData['module'] = Yii::$app->controller->module->id;
        $postData['menu_cate'] = $parentData['menu_cate'];
        $postData['addtime'] = time();
        $postData['admin_id'] = Yii::$app->user->identity->admin_id;

        try {

            $menuModel->setAttributes($postData, false);
            if ($menuModel->validate() && $menuModel->save()) {

                Yii::$app->cache->delete(Enum::CACHE_MENU_DATA);

                \Yii::$app->Beng->outHtml('添加成功');

            } else {
                \Yii::$app->Beng->outHtml('添加失败');

            }
        }catch (Exception $ex){
            Yii::$app->Beng->outHtml($ex);
            \Yii::$app->Beng->outHtml('添加失败11');

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
