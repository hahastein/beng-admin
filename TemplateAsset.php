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
        'jquery.slimscroll.min.js',
    ];

    //依赖关系
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'bengbeng\admin\components\assets\FontAwesomeAsset'
    ];

    public function init()
    {
        $this->sourcePath .= 'common' . DIRECTORY_SEPARATOR;
    }
}