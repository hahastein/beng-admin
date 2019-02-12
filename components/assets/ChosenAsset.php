<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/6
 * Time: 1:00
 */

namespace bengbeng\admin\components\assets;

use yii\web\AssetBundle;

class ChosenAsset extends AssetBundle
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
        $this->sourcePath .= '@bengbeng/admin/assets/plugins/chosen/';
    }
}