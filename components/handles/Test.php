<?php
/**
 * Created by PhpStorm.
 * User: gameg
 * Date: 2019/3/12
 * Time: 17:45
 */

namespace bengbeng\admin\components\handles;


class Test
{

    public static $in = null;

    public static function in(){
        if(static::$in == null){
            static::$in = new Test();
        }

        return static::$in;
    }


    public function a(){
        return "a";
    }

    public function b(){
        return "b";
    }


}