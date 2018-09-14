<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/14
 * Time: 22:16
 */

namespace bengbeng\admin\base;


use yii\web\AssetBundle;

class BaseAssetBundle extends AssetBundle
{
    //依赖关系
    public $depends = [
        'bengbeng\admin\TemplateAsset'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'assets/' . DIRECTORY_SEPARATOR;
    }
}