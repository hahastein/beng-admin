<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/6
 * Time: 23:02
 */

namespace bengbeng\admin;

class CommonAsset extends \yii\web\AssetBundle
{

    public $js = [
        'common.js',
        'min/jquery.slimscroll.min.js',
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets/common' . DIRECTORY_SEPARATOR;
    }
}