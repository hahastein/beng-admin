<?php
/**
 * Created by PhpStorm.
 * User: gameg
 * Date: 2019/3/21
 * Time: 1:28
 */

namespace bengbeng\admin\controllers;


use bengbeng\admin\base\BaseController;
use bengbeng\admin\models\AdminARModel;
use yii\db\ActiveQuery;

class AdminController extends BaseController
{
    /**
     * 所有管理员
     */
    public function actionAll(){

        $adminModel = new AdminARModel();

        $adminData = $adminModel->dataSet(function (ActiveQuery $query){
            $query->orderBy(['created_at' => SORT_DESC]);
            $query->asArray();
        });

        return $this->render('all', ['dataSet' => $adminData]);
    }
}