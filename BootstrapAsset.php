<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/15
 * Time: 1:19
 */

namespace bengbeng\admin;

//extends \yii\bootstrap\BootstrapAsset
class BootstrapAsset extends \yii\web\AssetBundle
{
    public $js = [
        'min/popper.min.js',
        'min/bootstrap.410.js',
    ];

    public $css = [
        'min/bootstrap.410.css',
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath = '@bengbeng/admin/assets/common' . DIRECTORY_SEPARATOR;
    }
}