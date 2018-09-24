<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/25
 * Time: 2:33
 */

namespace bengbeng\admin\components\assets;

use bengbeng\admin\base\BaseAssetBundle;

class PaceAsset extends BaseAssetBundle
{
    public $css = [
        'pace-theme-flash.css',
    ];

    public $js = [
        'pace.min.js',
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath .= "plugins/pace" . DIRECTORY_SEPARATOR;
    }
}