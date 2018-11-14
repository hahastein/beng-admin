<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/10/16
 * Time: 23:49
 */

namespace bengbeng\admin\components\assets\plugins;

use yii\web\AssetBundle;

class PluginsAsset extends AssetBundle
{

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->sourcePath = '@bengbeng/admin/assets/plugins/';
    }

}