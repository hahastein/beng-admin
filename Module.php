<?php
namespace bengbeng\admin;

use bengbeng\admin\components\handles\TemplateHandle;
use Yii;

class Module extends \yii\base\Module
{

    public function init()
    {
        parent::init();
        //重新设置view层的路径，增加主题功能
        $themeName = TemplateHandle::getTheme();
        $this->setViewPath('@bengbeng/admin/views'.DIRECTORY_SEPARATOR.$themeName);
        $this->layout = 'main-' . $themeName;
    }

    public function beforeAction($action)
    {
        //重新设置默认主页面
        Yii::$app->setHomeUrl(DIRECTORY_SEPARATOR.Yii::$app->controller->module->id.DIRECTORY_SEPARATOR.'home/main');
        if (parent::beforeAction($action)) {
            /* @var $action \yii\base\Action */
//            $view = $action->controller->getView();

//            $view->params['breadcrumbs'][] = [
//                'label' => ($this->defaultUrlLabel ?: Yii::t('rbac-admin', 'Admin')),
//                'url' => ['/' . ($this->defaultUrl ?: $this->uniqueId)],
//            ];
            return true;
        }
        return false;
    }

}