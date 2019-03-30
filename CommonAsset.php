<?php
/**
 * Copyright    : BengBeng Framework Inc.
 * Author       : hahastein(146119@qq.com)
 * Url          : http://www.52beng.com
 * CreateTime   : 2018/11/6 23:02
 * Description  : 资源公共类
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