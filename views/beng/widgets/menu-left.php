<?php
use yii\helpers\Url;
Yii::$app->Beng->outHtml($menus);die;
?>

<div class="sidebar-menu">
    <!-- BEGIN LEFT MENU ITEMS-->
    <ul class="menu-items">
        <li class="m-t-30"></li>

        <?php foreach ($menus as $menu){ ?>
            <?php if(!empty($menu['parent'])) { ?>
            <li <?= $controllerID==$parent['controller']?'class="open active"':'' ?>>
                <a href="javascript:;">
                    <span class="title"><?=$menu['menu_name']?></span>
                    <span class="arrow<?= $controllerID==$parent['controller']?'class=" open active"':'' ?>"></span>
                </a>
                <span class="icon-thumbnail">
                    <?= empty($menu['menu_icon'])?$menu['initials']:"<i class=\"{$menu['menu_icon']}\"></i>" ?>
                </span>
                <ul class="sub-menu">
                    <?php foreach ($menu['parent'] as $parent){ ?>
                        <li <?= $controllerID==$parent['controller'] && $actionID==$parent['action']?'class="active"':'' ?>>
                            <a href="<?= Url::to(['/'.$moduleID.'/'.$parent['controller'].'/'.$parent['action']]) ?>"><?=$parent['menu_name']?></a>
                            <span class="icon-thumbnail">
                                <?= empty($parent['menu_icon'])?$parent['initials']:"<i class=\"{$parent['menu_icon']}\"></i>" ?>
                            </span>
                        </li>

                    <?php } ?>
                </ul>
            </li>
            <?php }else{ ?>
            <li>
                <a class="detailed" href="<?=Url::to(['/'.$moduleID.'/'.$menu['controller'].'/'.$menu['action']])?>">
                    <span class="title"><?=$menu['menu_name']?></span>
                    <span class="details">8 新消息</span>
                </a>
                <span class="icon-thumbnail">
                    <?= empty($menu['menu_icon'])?$menu['initials']:"<i class=\"{$menu['menu_icon']}\"></i>" ?>
                </span>
            </li>
            <?php } ?>
        <?php } ?>

        <li class="">
            <a href="http://52beng.com/docs/" target="_blank"><span class="title">文档</span></a>
            <span class="icon-thumbnail"><i class="pg-note"></i></span>
        </li>
        <li class="">
            <a href="http://52beng.com/about" target="_blank"><span class="title">关于我们</span></a>
            <span class="icon-thumbnail">AU</span>
        </li>
    </ul>
    <div class="clearfix"></div>
    <!-- END LEFT MENU ITEMS-->
</div>