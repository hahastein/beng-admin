<?php
/**
 * 52Beng Framework Admin
 *
 * @link http://www.52beng.com
 * @copyright Copyright © 2019 52Beng Framework. All rights reserved.
 * @author hahastein <146119@qq.com>
 * @license http://www.52beng.com/license
 * @date 2019/4/4 2:11
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\AdminBaseController;
use bengbeng\framework\base\Enum;
use bengbeng\framework\components\helpers\ClassHelper;

class MerchantController extends AdminBaseController
{

    protected $actionPower = ['store', 'store-save', 'shops', 'add-store'];

    public function init()
    {
        $this->setLogic(ClassHelper::extendSplicing(Enum::EXTEND_TOOLS_MERCHANT, 'StoreBLL'));
        parent::init();
    }


    public function actionStore(){
        $this->renderData = $this->logic->getList();
    }

    public function actionAddStore(){
//        $this->getLogicLayer('StoreBLL', Enum::NAMESPACE_MERCHANT)->add();
//        return $this->render('add-store');
    }

    public function actionStoreSave(){
        $this->logic->save(\Yii::$app->Beng->PostData());
    }

    public function actionShops()
    {
        $this->renderData = $this->logic->getList();
    }

}