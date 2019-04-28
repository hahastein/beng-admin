<?php
/**
 * Created by PhpStorm.
 * User: gameg
 * Date: 2019/3/16
 * Time: 1:01
 */

namespace bengbeng\admin\widgets\tools;

use bengbeng\admin\components\enum\AdminEnum;
use bengbeng\admin\widgets\BaseWidget;
use yii\helpers\Html;

class PostformWidget extends BaseWidget
{

    public $modalID;
    public $modalText;
    public $submitType = AdminEnum::ADMIN_SUBMIT_TYPE_POST;
    public $submitUrl = '';
    public $control;

    private $formName;
    private $controlDefaultOptions;

    public function init()
    {
        $this->formName = 'postForm';
        $this->controlDefaultOptions = [
            'class' => 'form-control'
        ];
        parent::init();
    }

    public function run()
    {

        if($this->submitType == AdminEnum::ADMIN_SUBMIT_TYPE_AJAX){
            $this->controlDefaultOptions['required'] = 'required';
        }

        //重新处理内容
        $controlReset = [];
        foreach ($this->control as $row){
            $controlReset[] = $this->setFormItem($row);
        }



        //注册ajax脚本
        /*
        $this->getView()->registerJs('
            $().ready(function(){
                $("#' .$this->formName. '").validate({
                    onsubmit:true,onfocusout:false,onkeyup:false,
                    rules:{},
                    messages:{},
                    submitHandler:function(form){
                        $.ajax({
                            url:"'.$this->submitUrl.'",
                            data:{},
                            success:function(data){}
                        });
                    }
                });
            });
            var params = ' . $clientOptions . ';'
            . (empty($callbacks) ? '' : 'params.callbacks = { ' . $callbacks . ' };')
            . (empty($buttons) ? '' : 'params.buttons = { ' . $buttons . ' };')
            . (empty($modules) ? '' : 'params.modules = { ' . $modules . ' };')
            . 'jQuery( "#' . $this->options['id'] . '" ).summernote(params);
        ');
        */

        return $this->render('tools/postform', [
            'formName' => $this->formName,
            'modalID'  => $this->modalID,
            'modalText' => $this->modalText,
            'submitType' => $this->submitType,
            'submitUrl' => $this->submitUrl,
            'controls' => $controlReset
        ]);
    }

    private function setFormItem($row){

        $controlReset = [];

        foreach ($row as $key => $control) {

            $controlReset[$key]['label'] = $control['label'];
            $controlReset[$key]['tip'] = $control['tip'];
            $controlReset[$key]['row'] = $control['row'];
            $controlReset[$key]['control'] = $this->setFormControl($key, $control);

        }

        return $controlReset;
        
    }

    private function setFormControl($key, $control){


        $types = explode('.', $control['type']);

        $type = $types[0];
        if(count($types) > 1){
            $controlType = $types[1];
        }else{
            $controlType = 'text';
        }

        $controlOptions = $this->controlDefaultOptions;
        if(isset($control['no_validate']) && $control['no_validate'] === true){
            unset($controlOptions['required']);
        }

        switch ($type){

            case 'input':
                if(isset($control['placeholder'])){
                    $controlOptions = array_merge($controlOptions, ['placeholder' => $control['placeholder']]);
                }
                $controlValue = '';
                if(isset($control['value'])) {
                    $controlValue = $control['value'];
                }
                return Html::input($controlType, $key, $controlValue, $controlOptions);

            case 'select':

                $controlOptions['class'] .= ' custom-select';
                $controlOptions = array_merge($controlOptions, ['prompt' => ['text'=>'---请选择---', 'options'=>['value'=>'']]]);

                return Html::dropDownList($key, null, $control['dataSet'], $controlOptions);

            default:
                return '没有此类型的Control';

        }
    }
}