<?php
/**
 * Created by BengBengFramework.
 * User: hahastein
 * Date: 2018-09-27
 * Time: 18:18
 */

namespace bengbeng\admin\components\handles;


class TemplateHandle
{
    /**
     * 获取模版位置
     * @param string $name
     * @return string
     */
    public static function getTheme($name = ''){
        if(empty($name)){
            $loginTheme = \Yii::$app->params['theme'];
        }else{
            $loginTheme = $name;
        }
        return empty($loginTheme)?'default':$loginTheme;
    }

    public static function isSetTheme(){
        return isset(\Yii::$app->params['theme']);
    }

    public static function getImgToTheme($name){
        list(,$url) = \Yii::$app->assetManager->publish('@bengbeng/admin/assets');
        return $url . '/' . $name;
    }
}