<?php
namespace bengbeng\admin;

use bengbeng\admin\components\handles\TemplateHandle;
use Yii;

class Module extends \yii\base\Module
{

    public function init()
    {
        parent::init();
        $themeName = TemplateHandle::getTheme();
        $this->layout = 'main-' . $themeName;
        $this->setViewPath($this->getBasePath().DIRECTORY_SEPARATOR.$themeName);
    }

    public function beforeAction($action)
    {
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