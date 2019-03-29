<?php
/**
 * Created by PhpStorm.
 * User: hahastein
 * Date: 2018/11/15
 * Time: 20:15
 */

namespace bengbeng\admin\widgets\tools;

use bengbeng\admin\widgets\BaseWidget;
use yii\helpers\Url;

class BreadcrumbWidget extends BaseWidget
{

    /**
     * @var string the title
     */
    public $title;

    /**
     * @var array the nav
     * [’导航名称' => 'Url地址(如果为空，则不跳转)', ...]
     */
    public $menu;

    /**
     * @var array the right menus
     * ['a or btn(按钮类型)' => [
     *    'text' => '',
     *    'href(只有在按钮类型为a时起作用)' => 'url',
     *    'target(只在按钮类型为btn时起作用)' => '#modelID'
     * ]]
     */
    public $rightButtons = [];

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub

        if($this->menu){
            $this->menu = [
                '首页' => Url::home()
            ] + $this->menu;
        }else{
            $this->menu = [
                '首页' => Url::home()
            ];
        }

//        \Yii::$app->Beng->outHtml($this->menu);die;

    }

    public function run()
    {

        $modelView = '';
        foreach ($this->rightButtons as $key => $button){
            if(isset($button['modalParams'])){
                $button['modalParams']['modalID'] = $button['target'];
                $button['modalParams']['modalText'] = $button['title'];

                $modelView .= PostformWidget::widget($button['modalParams']);
            }
        }

        return $this->render('tools/breadcrumb', [
            'title'  => $this->title,
            'menu' => $this->menu,
            'rightBtn' => $this->rightButtons
        ]) . $modelView;
    }
}