<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/14
 * Time: 22:39
 */

namespace bengbeng\admin\components\assets;

use bengbeng\admin\base\BaseAssetBundle;

class FontAwesomeAsset extends BaseAssetBundle
{
    public $css = [
        'css/font-awesome.css',
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath .= "font-awesome";
    }
}