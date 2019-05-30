<?php
/**
 * 52Beng Framework Admin
 *
 * @link http://www.52beng.com
 * @copyright Copyright © 2019 52Beng Framework. All rights reserved.
 * @author hahastein <146119@qq.com>
 * @license http://www.52beng.com/license
 * @date 2019/3/21 1:28
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\AdminBaseController;
use bengbeng\framework\components\helpers\ClassHelper;

/**
 * Class AdminController
 * @author hahastein <146119@qq.com>
 * @since 1.0
 * @package bengbeng\admin\controllers
 */
class AdminController extends AdminBaseController
{

    public function init()
    {
        $this->setLogic([
            ClassHelper::adminSplicing('ccc.AdminBLL'),
            ClassHelper::adminSplicing('admin.AdminBLL')
        ]);

        parent::init();
    }

    /**
     * 管理员列表
     * @return string 返回模板内容
     */
    public function actionAll(){
        $this->renderData = $this->logic->admin_admin->getList();
    }
}