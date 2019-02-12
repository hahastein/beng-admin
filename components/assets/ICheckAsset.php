<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/15
 * Time: 0:45
 */

namespace bengbeng\admin\components\assets;


use yii\web\AssetBundle;

class ICheckAsset extends AssetBundle
{
    public $css = [
        'custom.css',
    ];

    public $js = [
        'icheck.min.js',
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath .= '@bengbeng/admin/assets/plugins/icheck/';
    }
}