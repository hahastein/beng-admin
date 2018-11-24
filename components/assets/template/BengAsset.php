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
        $this->sourcePath = '@bengbeng/admin/assets' . DIRECTORY_SEPARATOR . TemplateHandle::getTheme() . DIRECTORY_SEPARATOR;
    }
}