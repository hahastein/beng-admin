<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/15
 * Time: 0:45
 */

namespace bengbeng\admin\components\assets;


use bengbeng\admin\base\BaseAssetBundle;

class ICheckAsset extends BaseAssetBundle
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
        $this->sourcePath .= "plugins/icheck" . DIRECTORY_SEPARATOR;
    }
}