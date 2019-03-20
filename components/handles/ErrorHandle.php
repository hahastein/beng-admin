<?php
/**
 * Created by PhpStorm.
 * User: gameg
 * Date: 2019/3/14
 * Time: 3:56
 */

namespace bengbeng\admin\components\handles;

use yii\base\ErrorHandler as BaseErrorHandle;
use yii\helpers\Json;

class ErrorHandle extends BaseErrorHandle
{

    protected function renderException($exception)
    {

        if(\Yii::$app->request->getIsAjax()){
            exit(Json::encode([
                'code' => $exception->getCode(),
                'msg' => $exception->getMessage()
            ]));
        }else{
            //将500的代码，发送监控预警

            echo \Yii::$app->getView()->render('@bengbeng/admin/views/'.TemplateHandle::getTheme().'/error/main',['exception' => $exception,],$this);
        }

    }
}