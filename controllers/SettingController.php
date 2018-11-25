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
                'aaa'
            ],
            'css' => [
                'bbb'
            ]
        ];

        $serialize_str = serialize($resource);
        $title = '首页';
        $template_id = 1;
        $last_time = time();

        $settingPage = new ARSettingPage();
        $settingPage->dataUpdate(function (ActiveOperate $operate) use ($title, $template_id, $last_time, $serialize_str){
            $operate->params([
                'title' => $title,
                'template_id' => $template_id,
                'last_time' => $last_time,
                'resource_file' => $serialize_str
            ]);
            $operate->where([
                'router' => 'home/page'
            ]);
        });


        \Yii::$app->Beng->outHtml($serialize_str);

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