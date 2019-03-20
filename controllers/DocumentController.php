<?php
/**
 * Created by PhpStorm.
 * User: gameg
 * Date: 2019/3/13
 * Time: 23:46
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;

class DocumentController extends BaseController
{
    public function actionMain(){

        $this->render('main');
    }

    public function actionFaqs(){

        $this->render('faqs');
    }

    public function actionCreate(){

    }

    public function actionModify(){

    }

    public function behaviors()
    {
        self::setActions([
            'main'
        ]);
        return parent::behaviors();
    }
}