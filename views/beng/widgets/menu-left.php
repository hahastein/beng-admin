<?php
use yii\helpers\Url;
use bengbeng\admin\components\handles\TemplateHandle;
?>
<nav class="pcoded-navbar" pcoded-navbar-position="fixed" pcoded-header-position="fixed">
    <div class="pcoded-inner-navbar main-menu">
        <!--nav top avatar-->
        <div class="">
            <div class="main-menu-header">
                <img class="img-menu-user img-radius" src="<?= TemplateHandle::getImgToTheme('images/avatar100.png')?>" alt="User-Profile-Image">
                <div class="user-details">
                    <p id="more-details">hahastein<i class="feather icon-chevron-down m-l-10"></i></p>
                </div>
            </div>
            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="<?= Url::to(['user/profile']) ?>">
                            <i class="feather icon-user"></i>管理员信息
                        </a>
                        <a href="#!">
                            <i class="feather icon-settings"></i>系统设置
                        </a>
                        <a href="<?= Url::to(['user/logout']) ?>">
                            <i class="feather icon-log-out"></i>退出系统
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pcoded-navigation-label">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <?php foreach ($menus as $menu){ ?>
            <?php if(!empty($menu['parent'])) { ?>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                        <i class="feather icon-layers"></i>
                    </span>
                    <span class="pcoded-mtext"><?=$menu['menu_name']?></span>
                    <span class="pcoded-badge label label-danger">100+</span>
                </a>
                <ul class="pcoded-submenu">
                <?php foreach ($menu['parent'] as $parent){ ?>
                    <li class="">
                        <a href="<?= Url::to(['/'.$moduleID.'/'.$parent['controller'].'/'.$parent['action']]) ?>" class="waves-effect waves-dark">
                            <span class="pcoded-mtext"><?=$parent['menu_name']?></span>
                        </a>
                    </li>
                <?php } ?>
                </ul>
            </li>
            <?php }else{ ?>
            <li class="">
                <a href="navbar-light.html" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                        <i class="feather icon-menu"></i>
                    </span>
                    <span class="pcoded-mtext"><?=$menu['menu_name']?></span>
                </a>
            </li>
            <?php } ?>
            <?php } ?>
        </ul>
    </div>
</nav>