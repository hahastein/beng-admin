<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/14
 * Time: 22:15
 */

namespace bengbeng\admin\components\assets;

use bengbeng\admin\base\BaseAssetBundle;
use bengbeng\admin\components\handles\TemplateHandle;

class AdminLoginAsset extends BaseAssetBundle
{
    public $css = [
        'login.css'
    ];
    public $js = [
        'login.js'
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath .= TemplateHandle::getTheme() . DIRECTORY_SEPARATOR;
    }
}