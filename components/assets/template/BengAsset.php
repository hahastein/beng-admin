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
        'pages/waves/css/waves.min.css',
        'icon/feather/css/feather.css',
        'css/style.css'
    ];

    public $js = [
        'plugins/jquery-ui/js/jquery-ui.min.js',
        'pages/waves/js/waves.min.js',
        'plugins/jquery-slimscroll/js/jquery.slimscroll.js',
        'js/pcoded.min.js',
        'js/vertical/vertical-layout.min.js',
        'js/script.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'bengbeng\admin\BootstrapAsset'
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
            \Yii::$app->Beng->outHtml($resource_file);
            //合并模板所使用的资源文件
            if (!empty($resource_file['css'])) {
                $this->css = array_merge($this->css, $resource_file['css']);

            }
            if (!empty($resource_file['js'])) {
                $this->js = array_merge($this->js, $resource_file['js']);
            }
        }

        $this->sourcePath = '@bengbeng/admin/assets' . DIRECTORY_SEPARATOR . TemplateHandle::getTheme() . DIRECTORY_SEPARATOR;
    }
}