<?php
/**
 * Copyright    : BengBeng Framework Inc.
 * Author       : hahastein(146119@qq.com)
 * Url          : http://www.52beng.com
 * CreateTime   : 2019/3/30 0:19
 * Description  : 权限控制系统(可创建权限组、权限分配等功能)
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\AdminBaseController;

/**
 * Class RbacController
 * @author hahastein
 * @package bengbeng\admin\controllers
 */
class RbacController extends AdminBaseController
{

    /**
     * 权限组管理
     * @return string 返回模板内容
     */
    public function actionGroup(){

        return $this->render('group');
    }

}