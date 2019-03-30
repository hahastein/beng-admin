<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/10/13
 * Time: 21:47
 */

namespace bengbeng\admin\controllers;

use bengbeng\admin\base\AdminBaseController;

class HomeController extends AdminBaseController
{

    public function actionMain(){

//        \Yii::$app->Beng->outHtml('main');
        $orderData[] = [
            'order_id' => 3,
            'user_name' => 'hahastein',
            'order_sn' => '20181125001321535',
            'goods_name' => '测试商品3',
            'total_price' => '89.00',
            'create_time' => time(),
            'order_state' => 1
        ];
        $orderData[] = [
            'order_id' => 2,
            'user_name' => 'hahastein',
            'order_sn' => '20181125001321533',
            'goods_name' => '测试商品2',
            'total_price' => '131.00',
            'create_time' => time(),
            'order_state' => 1
        ];
        $orderData[] = [
            'order_id' => 1,
            'user_name' => 'hahastein',
            'order_sn' => '20181125001321510',
            'goods_name' => '测试商品1',
            'total_price' => '12.00',
            'create_time' => time(),
            'order_state' => 1
        ];
        $orderData[] = [
            'order_id' => 1,
            'user_name' => 'hahastein',
            'order_sn' => '20181125001321510',
            'goods_name' => '测试商品1',
            'total_price' => '12.00',
            'create_time' => time(),
            'order_state' => 1
        ];
        return $this->render('main', ['order' => $orderData]);
    }

    public function behaviors()
    {
        self::setActions([
            'main'
        ]);
        return parent::behaviors();
    }
}