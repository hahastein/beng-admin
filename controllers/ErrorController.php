<?php
/**
 * Created by PhpStorm.
 * User: gameg
 * Date: 2019/3/14
 * Time: 2:34
 */

namespace bengbeng\admin\controllers;


use bengbeng\admin\base\BaseController;

class ErrorController extends BaseController
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

    public function behaviors()
    {
        self::setActions([
            'main'
        ]);
        return parent::behaviors();
    }

    public function actions(){
        return [
            'main' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}