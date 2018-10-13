<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/9/24
 * Time: 0:14
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;
use Yii;
use bengbeng\admin\models\form\AdminLogin;
use bengbeng\framework\base\Enum;

class AuthController extends BaseController
{
    public $layout = '@bengbeng/admin/views/layouts/login';

    public function actionLogin()
    {
        if (!Yii::$app->getUser()->isGuest) {
            return $this->goHome();
        }

        $model = new AdminLogin();
        if ($model->load(Yii::$app->getRequest()->post())) {
            if($model->login()){
                return $this->goHome();
            }else{
//                $errors = current($model->getFirstErrors());
                return $this->renderAjax('login', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('login', ['model' => $model]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goBack(['system/auth/login']);
    }

    public function behaviors()
    {
        self::setActions([
            'login'
        ], Enum::ACCESS_RULE_NULL);
        self::setActions([
            'logout'
        ]);
        return parent::behaviors();
    }

}