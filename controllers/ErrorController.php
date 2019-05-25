<?php
/**
 * Created by PhpStorm.
 * User: gameg
 * Date: 2019/3/14
 * Time: 2:34
 */

namespace bengbeng\admin\controllers;


use bengbeng\admin\base\AdminBaseController;
use bengbeng\admin\components\handles\TemplateHandle;

class ErrorController extends AdminBaseController
{

//    public function actionMain(){
//
//        $exception = \Yii::$app->errorHandler->exception;
//
//        \Yii::$app->Beng->outHtml($exception);
//        if ($exception !== null) {
//            return $this->render('main', ['exception' => $exception]);
//        }
//
//    }

    protected $actionPower = ['main'];

    public function actions(){
        return [
            'main' => [
                'class' => 'yii\web\ErrorAction',
                'view' => '@bengbeng/admin/views/'.TemplateHandle::getTheme().'/message/system-error'
            ],
        ];
    }
}