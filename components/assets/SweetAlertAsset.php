<?php
/**
 * Created by BengBengFramework.
 * User: hahastein
 * Date: 2018-09-12
 * Time: 17:13
 */

namespace bengbeng\admin\components\assets;

use bengbeng\admin\base\BaseAssetBundle;

/**
 * 弹出框引入文件
 * Class SweetAlertAsset
 * @package bengbeng\admin
 */
class SweetAlertAsset extends BaseAssetBundle
{
    public $css = [
        'sweetalert.css',
    ];

    public $js = [
        'sweetalert.min.js',
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath .= "plugins/sweetalert" . DIRECTORY_SEPARATOR;
    }

}