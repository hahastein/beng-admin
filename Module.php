<?php
namespace bengbeng\admin;

use Yii;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        Yii::configure($this, require __DIR__ . '/config/config.php');
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