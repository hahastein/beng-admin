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
        'font-awesome/css/font-awesome.css',
        'css/animate.css',
        'css/style.css'
    ];

    public $js = [
        'js/common.js',
        'js/framework.js',
        'js/plugins/pace/pace.min.js',
        'js/plugins/metisMenu/jquery.metisMenu.js',
        'js/plugins/slimscroll/jquery.slimscroll.min.js',
    ];

    //依赖关系
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR.'/assets/';
    }
}