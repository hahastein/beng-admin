<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/12
 * Time: 2:10
 */

namespace bengbeng\admin;

use bengbeng\admin\components\handles\TemplateHandle;
use yii\web\AssetBundle;

class TemplateAsset extends AssetBundle
{

//    public $css = [
//        'animate.css',
//        'style.css'
//    ];
//
//    public $js = [
//        'framework.js',
//    ];

    //依赖关系
    public $depends = [
        'yii\web\JqueryAsset',
        'bengbeng\admin\BootstrapAsset',
        'bengbeng\admin\FontAwesomeAsset',
        'bengbeng\admin\components\assets\PaceAsset',
    ];

    public function init()
    {
        //按模板引入模板公共文件
        if(TemplateHandle::isSetTheme()){
            if(class_exists('bengbeng\\admin\\components\\assets\\template\\' . ucfirst(TemplateHandle::getTheme()) . 'Asset')) {
                $this->depends[] = 'bengbeng\\admin\\components\\assets\\template\\' . ucfirst(TemplateHandle::getTheme()) . 'Asset';
            }
            $this->sourcePath = '@bengbeng/admin/assets' . DIRECTORY_SEPARATOR . TemplateHandle::getTheme() . DIRECTORY_SEPARATOR;

            //设定公共调用资源文件
            $this->css = [
                'animate.css',
                'style.css'
            ];

            $this->js = [
                'framework.js',
            ];
        }
    }
}