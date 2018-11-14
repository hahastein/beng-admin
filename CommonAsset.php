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
    ];

    public function init()
    {
        $this->sourcePath = '@bengbeng/admin/assets/common' . DIRECTORY_SEPARATOR;
    }
}