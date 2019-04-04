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
use bengbeng\framework\components\ifc\ControllerInterface;

class StoreController extends AdminBaseController implements ControllerInterface
{

    public function actionAll()
    {
        $returnData = $this->getLogicLayer('StoreBLL', Enum::NAMESPACE_MERCHANT)->getList();

        return $this->render('all', $returnData);
    }
}