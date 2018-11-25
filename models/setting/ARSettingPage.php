<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/25
 * Time: 14:37
 */

namespace bengbeng\admin\models\setting;

use bengbeng\framework\base\BaseActiveRecord;

class ARSettingPage extends BaseActiveRecord
{
    public static function tableName()
    {
        return '{{%setting_page}}';
    }


}