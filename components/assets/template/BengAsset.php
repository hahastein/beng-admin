<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/14
 * Time: 15:20
 */

namespace bengbeng\admin\components\assets\template;

use bengbeng\admin\components\handles\TemplateHandle;
use yii\web\AssetBundle;

class BengAsset extends AssetBundle
{

    public $css = [

    ];
    public $js = [

    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'bengbeng\admin\BootstrapAsset',
    ];

    public function init()
    {
        $this->sourcePath = '@bengbeng/admin/assets' . DIRECTORY_SEPARATOR . TemplateHandle::getTheme() . DIRECTORY_SEPARATOR;
    }
}