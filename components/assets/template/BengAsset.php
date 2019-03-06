<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/14
 * Time: 15:20
 */

namespace bengbeng\admin\components\assets\template;

use bengbeng\admin\components\handles\TemplateHandle;
use yii\web\AssetBundle;

class BengAsset extends AssetBundle
{

    public $css = [
        'style.min.css'
    ];

    public $js = [
        'plugins/popper.min.js',
        'plugins/bootstrap.min.js',
        'pages/common.js'
    ];

    public $depends = [
//        'yii\web\JqueryAsset',
//        'bengbeng\admin\BootstrapAsset'
        'bengbeng\admin\FontAwesomeAsset'
    ];

    public function init()
    {
        //拼接RouterUrl
        $routerUrl = \Yii::$app->controller->id . '/' . \Yii::$app->controller->action->id;
        $cache_name = 'template_' . md5($routerUrl);
        $cache = \Yii::$app->cache;

        if($cache->exists($cache_name)) {
            $pageData = $cache->get($cache_name);
            $resource_file = unserialize($pageData['resource_file']);
            //合并模板所使用的资源文件
            if (!empty($resource_file['css'])) {

                switch ($pageData['css_order']){
                    case 1:
                        array_unshift($this->css, $resource_file['css']);
                        break;
                    default:
                        $this->css = array_merge($this->css, $resource_file['css']);
                        break;
                }
            }
            if (!empty($resource_file['js'])) {
                $this->js = array_merge($this->js, $resource_file['js']);
            }
        }

        $this->sourcePath = '@bengbeng/admin/assets' . DIRECTORY_SEPARATOR . TemplateHandle::getTheme() . DIRECTORY_SEPARATOR;

        //非登录页面加载公共内容
        if($routerUrl != 'auth/login'){
            $includeJs = [
                'pages/sidebarmenu.js',
                'pages/perfect-scrollbar.jquery.min.js'
            ];
        }
    }
}