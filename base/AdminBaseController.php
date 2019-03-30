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
use bengbeng\framework\controllers\base\BaseController;
use bengbeng\framework\enum\ErrorEnum;
use bengbeng\framework\enum\SuccessEnum;

class AdminBaseController extends BaseController
{
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
     * 成功提示
     * @param string $code 错误代码
     * @param string $msg 自定义输出内容，配合$code为0时使用
     * @param string $url 跳转url
     * @return string
     */
    public function success($code, $msg = '', $url = ''){
        $content = $code == SuccessEnum::SUCCESS_CUSTOMER ?$msg:SuccessEnum::infoChange($code);
        return $this->_jump('成功提示', $content, $url, 3, 1);
    }

    /**
     * 错误提示
     * @param string $code 错误代码
     * @param string $msg 自定义输出内容，配合$code为0时使用
     * @param string $url 跳转url
     * @return string
     */
    public function error($code, $msg = '' ,$url = ''){
        $content = $code == ErrorEnum::ERROR_CUSTOMER ?$msg:ErrorEnum::infoChange($code);
        return $this->_jump('温馨提示', $content, $url, 3);
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
            return $this->render("error", $returnData);
        }
    }
}