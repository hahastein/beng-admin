<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/15
 * Time: 20:15
 */

namespace bengbeng\admin\widgets\information;

use bengbeng\admin\components\handles\TemplateHandle;
use yii\base\Widget;

class RightWidget extends Widget
{

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        return $this->render('@bengbeng/admin/views/'.TemplateHandle::getTheme().'/widgets/right', [
            'msg' => 1,
        ]);
    }
}