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

    public $css = [
        'animate.css',
        'style.css'
    ];

    public $js = [
        'framework.js',
        'jquery.metisMenu.js',
    ];

    //依赖关系
    public $depends = [
        'yii\web\JqueryAsset',
        'bengbeng\admin\BootstrapAsset',
        'bengbeng\admin\FontAwesomeAsset',
        'bengbeng\admin\components\assets\PaceAsset',
        'bengbeng\admin\CommonAsset'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . TemplateHandle::getTheme() . DIRECTORY_SEPARATOR;
    }
}