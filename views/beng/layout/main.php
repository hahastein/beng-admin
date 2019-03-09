<?php
use yii\helpers\Html;

\bengbeng\admin\TemplateAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= Html::csrfMetaTags() ?>
    <title>登录<?= Html::encode(Yii::$app->name) ?></title>
    <?= $this->head(); ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-default fixed-layout">
<?php $this->beginBody() ?>
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">52Beng Loading</p>
    </div>
</div>

<div id="main-wrapper">

    <header class="topbar">

        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header p-r-10">
                <a class="block navbar-brand text-center" href="<?= \yii\helpers\Url::home() ?>">
                    <!--
                    <img src="<?= \bengbeng\admin\components\handles\TemplateHandle::getImgToTheme("/images/icon-50.png") ?>" alt="Home" class="dark-logo" />
                    <img src="<?= \bengbeng\admin\components\handles\TemplateHandle::getImgToTheme("/images/icon-50.png") ?>" alt="Home" class="light-logo" />
                    -->
                    <span class="font-20 font-weight-bold">52Beng</span>
                    <small> Admin</small>
                </a>
            </div>

            <div class="navbar-collapse navbar-dark">
                <ul class="navbar-nav mr-auto">
                    <!-- 菜单ICON  -->
                    <li class="nav-item">
                        <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-efa clasaves-dark" href="javascript:void(0)">
                            <i class="icon-menu"></i>
                        </a>
                    </li>
                    <!-- 搜索 -->
                    <li class="nav-item">
                        <form class="app-search d-none d-md-block d-lg-block">
                            <input type="text" class="form-control" placeholder="输入内容并按下回车进行搜索">
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav my-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="<?=\yii\helpers\Url::to(['/cms'])?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-notepad"></i> <small>内容管理</small>

                        </a>
                    </li>

                    <?= \bengbeng\admin\widgets\information\NotificationsWidget::widget()?>

                    <?= \bengbeng\admin\widgets\information\NotificationsWidget::widget([
                        'layout' => 'message',
                        'title' => '新消息'
                    ])?>

                    <?= \bengbeng\admin\widgets\information\RightWidget::widget()?>

                </ul>
            </div>

        </nav>

    </header>

    <aside class="left-sidebar">

        <div class="scroll-sidebar">
            <!-- 用户资料 -->
            <div class="user-profile">
                <div class="user-pro-body">
                    <div>
                        <img src="<?= \bengbeng\admin\components\handles\TemplateHandle::getImgToTheme('images/default_avatar.png')?>" alt="user-img" class="img-circle">
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?= Yii::$app->user->identity->admin_nickname?>(<?= Yii::$app->user->identity->admin_name ? Yii::$app->user->identity->admin_name : '' ?>)
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> 用户资料</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> 账户设置</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="<?= \yii\helpers\Url::to(['auth/logout'])?>" class="dropdown-item"><i class="fa fa-power-off"></i> 退出系统</a>
                            <!-- text-->
                        </div>
                    </div>
                </div>
            </div>

            <nav class="sidebar-nav">
                <ul id="sidebarnav">



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
        </div>

    </aside>

    <div class="page-wrapper">
        <?= $content ?>
    </div>

    <footer class="footer">
        © 2019 BengBeng Framework by 52beng.com
    </footer>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

