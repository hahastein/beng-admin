<?php
/**
 * Created by PhpStorm.
 * User: gameg
 * Date: 2019/3/13
 * Time: 23:57
 */

namespace bengbeng\admin\controllers;


use bengbeng\admin\base\BaseController;

class CmsController extends BaseController
{
    /**
     * 所有文章
     */
    public function actionAll(){

        $this->render('all');
    }

    /**
     * 文章类别
     */
    public function actionCategory(){

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