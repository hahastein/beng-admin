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

class MerchantController extends AdminBaseController
{

    public function actionStore(){
        $returnData = $this->getLogicLayer('StoreBLL', Enum::NAMESPACE_MERCHANT)->getList();
        return $this->render('store', $returnData);
    }

    public function actionAddStore(){
//        $this->getLogicLayer('StoreBLL', Enum::NAMESPACE_MERCHANT)->add();
        return $this->render('add-store');
    }

    public function actionStoreSave(){
        $this->getLogicLayer('StoreBLL', Enum::NAMESPACE_MERCHANT)->save(\Yii::$app->request->post());
    }

    public function actionShops()
    {
        $returnData = $this->getLogicLayer('ShopsBLL', Enum::NAMESPACE_MERCHANT)->getList();
        return $this->render('shops', $returnData);
    }

    public function behaviors()
    {
        self::setActions([
            'store', 'store-save', 'shops', 'add-store'
        ]);
        return parent::behaviors();
    }
}