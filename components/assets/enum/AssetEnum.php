<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/10/17
 * Time: 0:20
 */

namespace bengbeng\admin\components\assets\enum;


class AssetEnum
{
    const PLUS_SWEET_ALERT = 'sweetalert';
    const PLUS_ICHECK = 'icheck';

    static public function changePlus($plus){
        switch ($plus){
            case self::PLUS_SWEET_ALERT:
                return [
                    'js' => [],
                    'css' => []
                ];
        }
    }

}