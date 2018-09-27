<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/14
 * Time: 22:39
 */

namespace bengbeng\admin;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $css = [
        'css/font-awesome.css',
    ];

    public function init()
    {
        parent::init();

        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets/plugins/font-awesome' . DIRECTORY_SEPARATOR;
    }
}