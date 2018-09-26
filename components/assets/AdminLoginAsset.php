<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/14
 * Time: 22:15
 */

namespace bengbeng\admin\components\assets;

use bengbeng\admin\base\BaseAssetBundle;

class AdminLoginAsset extends BaseAssetBundle
{
    public $css = [
        'pages.css'
    ];
    public $js = [
        'pages.js'
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath .= "login" . DIRECTORY_SEPARATOR . 'new-york' . DIRECTORY_SEPARATOR;
    }
}