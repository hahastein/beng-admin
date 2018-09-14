<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/12
 * Time: 2:10
 */

namespace bengbeng\admin;

use yii\web\AssetBundle;

class TemplateAsset extends AssetBundle
{

    public $css = [
        'animate.css',
        'style.css'
    ];

    public $js = [
        'common.js',
        'framework.js',
        'pace.min.js',
        'jquery.metisMenu.js',
        'min/jquery.slimscroll.min.js',
    ];

    //依赖关系
    public $depends = [
        'yii\web\JqueryAsset',
        'bengbeng\admin\BootstrapAsset',
        'bengbeng\admin\FontAwesomeAsset'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets/common' . DIRECTORY_SEPARATOR;
    }
}