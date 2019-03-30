<?php
/**
 * Copyright    : BengBeng Framework Inc.
 * Author       : hahastein(146119@qq.com)
 * Url          : http://www.52beng.com
 * CreateTime   : 2019/3/21 1:28
 * Description  : 管理员系统(管理员维护，创建、删除、修改，分配权限)
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;
use bengbeng\admin\models\AdminARModel;
use yii\db\ActiveQuery;

/**
 * Class AdminController
 * @author hahastein
 * @package bengbeng\admin\controllers
 */
class AdminController extends BaseController
{
    /**
     * 管理员列表
     * @return string 返回模板内容
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