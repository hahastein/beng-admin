<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/6
 * Time: 1:13
 */

namespace bengbeng\admin\components\assets;

use bengbeng\admin\base\BaseAssetBundle;

class BlueimpAsset extends BaseAssetBundle
{
    public $css = [
        'blueimp-gallery.min.css',
    ];

    public $js = [
        'jquery.blueimp-gallery.min.js',
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath .= '@bengbeng/admin/assets/plugins/blueimp/';
    }
}