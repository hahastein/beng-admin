<?php
/**
 * 52Beng Framework Admin
 *
 * @link http://www.52beng.com
 * @copyright Copyright © 2019 52Beng Framework. All rights reserved.
 * @author hahastein <146119@qq.com>
 * @license http://www.52beng.com/license
 * @date 2019/5/19 16:08
 */

namespace bengbeng\admin\models\extend;


use bengbeng\framework\base\BaseActiveRecord;

class ARExtend extends BaseActiveRecord
{
    public static function tableName()
    {
        return '{{%extend}}';
    }


}