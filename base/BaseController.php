<?php
/**
 * Created by BengBengFramework.
 * User: hahastein
 * Date: 2018-09-12
 * Time: 15:20
 */

namespace bengbeng\admin\base;


use bengbeng\framework\controllers\base\FactoryController;

class BaseController extends FactoryController
{
    public $layout = '@bengbeng/admin/views/layouts/main';

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }
}