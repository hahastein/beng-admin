<?php
/**
 * 52Beng Framework Admin
 *
 * @link http://www.52beng.com
 * @copyright Copyright © 2019 52Beng Framework. All rights reserved.
 * @author hahastein <146119@qq.com>
 * @license http://www.52beng.com/license
 * @date 2018/9/12 15:20
 */

namespace bengbeng\admin\base;

use bengbeng\admin\components\handles\TemplateHandle;
use bengbeng\framework\base\Enum;
use bengbeng\framework\controllers\base\BaseController;
use bengbeng\framework\enum\ErrorEnum;
use bengbeng\framework\enum\SuccessEnum;

/**
 * Class AdminBaseController
 * @package bengbeng\admin\base
 */
class AdminBaseController extends BaseController
{

    /**
     * 页面类型
     * @var null|bool
     */
    protected $renderType = null;

    /**
     * 逻辑数据，显示在页面的数据
     * @var array
     */
    protected $renderData;

    /**
     * 可访问的action
     * @var array
     */
    protected $actionPower;

    protected $autoLogic = true;

    public function init()
    {
//        $this->module->setViewPath($this->module->getBasePath().DIRECTORY_SEPARATOR.TemplateHandle::getTheme());
        parent::init(); // TODO: Change the autogenerated stub

        //重新设定模板目录
        if(TemplateHandle::isSetTheme()){
            $this->layout = '@bengbeng/admin/views/'.TemplateHandle::getTheme().'/layout/main';
        }
    }

    /**
     * 获取 Bll Class
     * @param string $logicName 逻辑类的名称，可以是单类，也可以是多层级类(例如：class或者namespace.class)
     * @param string $namespace 所用命名空间,默认为本命名空间下,可使用提供的枚举（枚举定义范围：Enum::NAMESPACE_*）
     * @return mixed 返回 Bll Class
     */
    protected function getLogicLayer($logicName, $namespace = '')
    {
        if(empty($namespace)){
            $namespace = Enum::NAMESPACE_ADMIN;
        }
        return parent::getLogicLayer($logicName, $namespace);
    }

    /**
     * 自动获取当前Controller的Bll类
     * @param string $namespace 所用命名空间
     * @return mixed 返回 Bll Class
     */
    protected function getAutoLogicLayer($namespace){
        $logicName = ucfirst($this->id) . 'Logic';
        return $this->getLogicLayer($logicName, $namespace);
    }

    /**
     * 重写处理action之后的流程，针对按需加载逻辑处理流程
     * @param \yii\base\Action $action
     * @param mixed $result
     * @return mixed|string
     */
    public function afterAction($action, $result)
    {

        if(empty($result) && $this->autoLogic){
            if($this->renderType === true){
                return $this->success($this->renderData);
            }else if($this->renderType === false){
                return $this->error($this->renderData);
            }else{
                $action->id;
                if($this->renderData){
                    return $this->render($action->id, $this->renderData);
                }else{
                    return $this->render($action->id);
                }
            }

        }else{
            return parent::afterAction($action, $result);
        }
    }

    public function behaviors()
    {
        if($this->actionPower){
            self::setActions($this->actionPower);
        }
        return parent::behaviors(); // TODO: Change the autogenerated stub
    }

    /**
     * 成功提示
     * @param string $msg 输出内容，当输入内容为纯数字，则为定义好的信息输出
     * @param string $url 跳转url
     * @return string
     */
    public function success($msg = '', $url = ''){
        if(is_int($msg)) {
            $msg = SuccessEnum::infoChange($msg);
        }
        return $this->_jump('成功提示', $msg, $url, 3, 1);
    }

    /**
     * 错误提示
     * @param string $msg 输出内容，当输入内容为纯数字，则为定义好的信息输出
     * @param string $url 跳转url
     * @return string
     */
    public function error($msg = '' ,$url = ''){

        if(is_object($msg)){
            return $this->_jumpEx('温馨提示',$msg);
        }else{
            if(is_int($msg)) {
                $msg = ErrorEnum::infoChange($msg);
            }
            return $this->_jump('温馨提示', $msg, $url, 3);
        }

    }

    /**
     * 最终跳转处理
     * @param string $title 提示标题
     * @param string $content 提示内容
     * @param string $url 跳转url
     * @param int $wait 等待时间
     * @param int $type 类型 0错误 1成功
     * @return string
     */
    private function _jump($title, $content, $url='', $wait=3, $type = 0){

//        $content = str_replace('\n', '<br>', $content);

        foreach (explode('\n', $content) as $item){
            $content .= '<p class="ml-1">'.$item.'</p>';
        }

        $returnData = [
            'title' => $title,
            'content' => $content,
            'url' => $url,
            'wait' => $wait,
            'type' => $type
        ];

        if(empty($url)){
//            $data['jumpurl']=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"javascript:window.close();";
            $returnData['url'] = "javascript:history.go(-1);";
        }

        if($type){
            return $this->render("success", $returnData);
        }else{
            return $this->render('@bengbeng/admin/views/'.TemplateHandle::getTheme().'/message/page-error', $returnData);
        }
    }

    private function _jumpEx($title, $ex){
        return $this->render('@bengbeng/admin/views/'.TemplateHandle::getTheme().'/message/system-error', ['name' => $title, 'exception' => $ex]);
    }
}