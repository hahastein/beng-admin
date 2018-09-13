<?php
/**
 * Created by BengBengFramework.
 * User: hahastein
 * Date: 2018-09-12
 * Time: 17:13
 */

namespace bengbeng\admin;

use yii\web\AssetBundle;

/**
 * 弹出框引入文件
 * Class SweetAlertAsset
 * @package bengbeng\admin
 */
class SweetAlertAsset extends AssetBundle
{
    public $css = [
        'css/plugins/sweetalert/sweetalert.css',
    ];

    public $js = [
        'js/plugins/sweetalert/sweetalert.min.js',
    ];

    //依赖关系
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR.'/assets/';
    }
}