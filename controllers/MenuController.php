<?php

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;
use bengbeng\admin\models\menu\ARMenu;
use Yii;

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

        return $this->render('all', ['dataSet' => $dataSet]);

    }

    public function behaviors()
    {
        self::setActions([
            'create'
        ]);
        return parent::behaviors();
    }
}
