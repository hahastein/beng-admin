<?php
use yii\helpers\Url;
use bengbeng\admin\components\handles\TemplateHandle;
?>

<nav class="sidebar-nav">
    <ul id="sidebarnav">

        <li class="nav-small-cap">--- PERSONAL</li>
        <li>
            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                <i class="icon-speedometer"></i>
                <span class="hide-menu">
                    Dashboard
                    <span class="badge badge-pill badge-cyan ml-auto">4</span>
                </span>
            </a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="index.html">Minimal </a></li>
                <li><a href="index2.html">Analytical</a></li>
                <li><a href="index3.html">Demographical</a></li>
                <li><a href="index4.html">Modern</a></li>
            </ul>
        </li>

        <?php foreach ($menus as $menu): ?>
            <li>
                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-speedometer"></i>
                    <span class="hide-menu">
                    <?=$menu['menu_name']?>
                    <span class="badge badge-pill badge-cyan ml-auto">4</span>
                </span>
                </a>
                <?php if(!empty($menu['parent'])): ?>
                <ul aria-expanded="false" class="collapse">
                    <?php foreach ($menu['parent'] as $parent): ?>
                    <li><a href="<?= Url::to([$parent['controller'].'/'.$parent['action']]) ?>"><?=$menu['menu_name']?> </a></li>
                    <?php endforeach;?>
                </ul>
                <?php endif;?>
            </li>

        <?php endforeach;?>



        <!--left menu bottom-->
        <li class="nav-small-cap">--- SUPPORT</li>
        <li>
            <a class="waves-effect waves-dark" href="<?= \yii\helpers\Url::to(['document/main'])?>" aria-expanded="false">
                <i class="far fa-circle text-danger"></i>
                <span class="hide-menu">系统说明文档</span>
            </a>
        </li>
        <li>
            <a class="waves-effect waves-dark" href="<?= \yii\helpers\Url::to(['auth/logout'])?>" aria-expanded="false">
                <i class="far fa-circle text-success"></i>
                <span class="hide-menu">退出系统</span>
            </a>
        </li>
        <li>
            <a class="waves-effect waves-dark" href="<?= \yii\helpers\Url::to(['document/faqs'])?>" aria-expanded="false">
                <i class="far fa-circle text-info"></i>
                <span class="hide-menu">常见问题</span>
            </a>
        </li>
    </ul>
</nav>
