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