<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/9
 * Time: 21:27
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;
use bengbeng\admin\models\setting\ARSettingPage;
use bengbeng\framework\base\data\ActiveOperate;

class SettingController extends BaseController
{

    /**
     * 系统基础设置
     * @return string
     */
    public function actionSysBase(){

        return $this->render('sys-base');
    }

    public function actionTemplate(){

    }

    public function actionPage(){
        $resource = [
            'js' => [
                'pages/dashboard/ecommerce-dashboard.min.js'
            ],
            'css' => [
                'css/widget.css'
            ]
        ];

        $serialize_str = serialize($resource);
        $title = '首页';
        $template_id = 1;
        $last_time = time();

        $settingPage = new ARSettingPage();
        if($settingPage->dataUpdate(function (ActiveOperate $operate) use ($title, $template_id, $last_time, $serialize_str){
            $operate->params([
                'title' => $title,
                'template_id' => $template_id,
                'last_time' => $last_time,
                'resource_file' => $serialize_str
            ]);
            $operate->where([
                'router' => 'home/main'
            ]);
        })){
            \Yii::$app->Beng->outHtml('更新成功');

        }else{
            \Yii::$app->Beng->outHtml('更新失败');

        }



        return $this->render('page');
    }

    public function behaviors()
    {
        self::setActions([
            'sys-base', 'page'
        ]);
        return parent::behaviors();
    }
}