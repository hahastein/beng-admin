<?php
/**
 * Copyright    : BengBeng Framework Inc.
 * Author       : hahastein(146119@qq.com)
 * Url          : http://www.52beng.com
 * CreateTime   : 2019/3/13 23:57
 * Description  : Cms系统
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\AdminBaseController;

/**
 * Class CmsController
 * @author hahastein
 * @package bengbeng\admin\controllers
 */
class CmsController extends AdminBaseController
{
    /**
     * 所有文章
     */
    public function actionAll(){

        return $this->render('all');
    }

    /**
     * 文章类别
     */
    public function actionCategory(){

        return $this->render('category');
    }

    public function actionCreate(){

    }

    public function actionModify(){

    }

    public function behaviors()
    {
        self::setActions([
            'category'
        ]);
        return parent::behaviors();
    }

}