<?php
/**
 * Copyright    : BengBeng Framework Inc.
 * Author       : hahastein(146119@qq.com)
 * Url          : http://www.52beng.com
 * CreateTime   : 2018/9/24 0:14
 * Description  : 登录注销功能
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\BaseController;
use bengbeng\admin\components\handles\TemplateHandle;
use bengbeng\admin\models\setting\ARSettingPage;
use bengbeng\admin\models\form\AdminLogin;
use bengbeng\framework\base\Enum;
use Yii;
use yii\db\ActiveQuery;

/**
 * Class AuthController
 * @author hahastein
 * @package bengbeng\admin\controllers
 */
class AuthController extends BaseController
{

    /**
     * 重写init方法，改变使用登录系统的layout路径
     * @author hahastein
     */
    public function init()
    {
        parent::init();
        $this->layout = '@bengbeng/admin/views/'.TemplateHandle::getTheme().'/layout/login';
    }

    /**
     * 登录功能
     * @author hahatein
     * @return string|\yii\web\Response
     */
    public function actionLogin()
    {

        $cache_name = 'template_'.md5('auth/login');
        $cache = \Yii::$app->cache;
        if(!$cache->exists($cache_name)){
            $settingPage = new ARSettingPage();
            $pageData = $settingPage->dataOne(function (ActiveQuery $query){
                $query->select(['title', 'template_id', 'last_time', 'resource_file', 'css_order']);
                $query->where([
                    'router' => 'auth/login'
                ]);
                $query->asArray();
            });
            $cache->add($cache_name, $pageData);
        }

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

    /**
     * 注销系统
     * @author hahastein
     * @return \yii\web\Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goBack(['system/auth/login']);
    }

    /**
     * behaviors重写
     * @return array
     */
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