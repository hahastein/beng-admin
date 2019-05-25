<?php
/**
 * 52Beng Framework Admin
 *
 * @link http://www.52beng.com
 * @copyright Copyright © 2019 52Beng Framework. All rights reserved.
 * @author hahastein <146119@qq.com>
 * @license http://www.52beng.com/license
 * @date 2019/5/19 14:32
 */

namespace bengbeng\admin\controllers;


use bengbeng\admin\base\AdminBaseController;
use bengbeng\admin\logic\ExtendBLL;

class ExtendController extends AdminBaseController
{
    /**
     * @var ExtendBLL
     */
    private $Bll;
    protected $actionPower = ['plug', 'save'];

    public function init()
    {
        $this->Bll = new ExtendBLL();
        parent::init();
    }

    public function actionPlug(){
        $this->renderData = [
            'dataSet' => $this->Bll->getList()
        ];
    }

    public function actionSave(){

        $postData = \Yii::$app->Beng->PostData([
            'show_name' => 'showName',
            'extend_name' => 'extendName',
            'extend_namespace' => 'extendNamespace',
            'extend_vendor_path' => 'extendVendorPath',
        ]);

        if($this->Bll->save($postData)){
            \Yii::$app->Beng->outHtml('写入成功');
        }else{
            \Yii::$app->Beng->outHtml($this->Bll->getError());
        }
    }
}