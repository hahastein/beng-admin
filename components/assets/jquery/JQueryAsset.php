<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/14
 * Time: 19:02
 */

namespace bengbeng\admin\components\assets\jquery;


use yii\web\AssetBundle;

class JQueryAsset extends AssetBundle
{

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->sourcePath = '@bengbeng/admin/assets/plugins/jquery' . DIRECTORY_SEPARATOR;
    }
}