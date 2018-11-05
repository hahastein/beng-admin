<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/6
 * Time: 1:00
 */

namespace bengbeng\admin\components\assets;

use bengbeng\admin\base\BaseAssetBundle;

class ChosenAsset extends BaseAssetBundle
{
    public $css = [
        'bootstrap-chosen.css',
    ];

    public $js = [
        'chosen.jquery.js',
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath .= "plugins/chosen" . DIRECTORY_SEPARATOR;
    }
}