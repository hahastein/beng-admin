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

class NotificationsWidget extends Widget
{

    public $layout;
    public $title;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->layout = $this->layout?:'notifications';
        $this->title = $this->title?:'消息通知';
    }

    public function run()
    {
        return $this->render('@bengbeng/admin/views/'.TemplateHandle::getTheme().'/widgets/' . $this->layout, [
            'title' => $this->title,
            'count' => 1,
            'dataSet' => ['asdasd']
        ]);
    }
}