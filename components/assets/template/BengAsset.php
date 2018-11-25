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
        'jquery-ui/js/jquery-ui.min.js',
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
        //拼接当前的controller和action
        $routerUrl = \Yii::$app->controller->id . '/' . \Yii::$app->controller->action->id;
        $routerUrl = 'template_' . md5($routerUrl);
        $cache = \Yii::$app->cache;
        $pageData = $cache->get($routerUrl);
        $resource_file = unserialize($pageData['resource_file']);
        \Yii::$app->Beng->outHtml($resource_file);

        $this->sourcePath = '@bengbeng/admin/assets' . DIRECTORY_SEPARATOR . TemplateHandle::getTheme() . DIRECTORY_SEPARATOR;
    }
}