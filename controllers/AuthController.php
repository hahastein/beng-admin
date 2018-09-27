<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/24
 * Time: 0:14
 */

namespace bengbeng\admin\controllers;

use Yii;
use bengbeng\admin\models\form\AdminLogin;
use bengbeng\framework\base\Enum;
use bengbeng\framework\controllers\base\FactoryController;

class AuthController extends FactoryController
{
    public $layout = '@bengbeng/admin/views/layouts/login';

    public function actionLogin()
    {
        if (!Yii::$app->getUser()->isGuest) {
            return $this->goHome();
        }

        $model = new AdminLogin();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $loginTheme = \Yii::$app->params['login_theme'];
            $loginTheme = empty($loginTheme)?'default':$loginTheme;
            return $this->render('login-'.$loginTheme, ['model' => $model]);
        }
    }

    public function behaviors()
    {
        self::setActions([
            'login'
        ], Enum::ACCESS_RULE_NULL);
        return parent::behaviors();
    }

}