<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/25
 * Time: 14:37
 */

namespace bengbeng\admin\models\setting;

use bengbeng\framework\base\BaseActiveRecord;
use yii\db\ActiveQuery;

class ARSettingPage extends BaseActiveRecord
{
    public static function tableName()
    {
        return '{{%setting_page}}';
    }

    public function findByAll(){
        return $this->dataSet(function (ActiveQuery $query){
            $query->select(['page_id', 'title', 'resource_file', 'css_order', 'router', 'create_time', 'last_time', 'admin_id']);

            $query->orderBy([
                'last_time' => SORT_DESC,
            ]);
            $query->asArray();
        });
    }
}