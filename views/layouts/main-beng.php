<?php
use yii\helpers\Html;
use bengbeng\admin\TemplateAsset;
use bengbeng\admin\components\handles\TemplateHandle;

TemplateAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=<?= Yii::$app->charset ?>" />
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <?= Html::csrfMetaTags() ?>
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <title><?= Html::encode(Yii::$app->name .'-' . $this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="fixed-header sidebar-visible menu-pin">
<?php $this->beginBody() ?>

    <!-- BEGIN NAV-->
    <nav class="page-sidebar" data-pages="sidebar">
        <!-- BEGIN LEFT MENU TOP TRAY CONTENT-->
        <div class="sidebar-overlay-slide from-top" id="appMenu">
            <div class="row">
                <div class="col-xs-6 no-padding">
                    <a href="#" class="p-l-40"><img src="assets/img/demo/social_app.svg" alt="socail">
                    </a>
                </div>
                <div class="col-xs-6 no-padding">
                    <a href="#" class="p-l-10"><img src="assets/img/demo/email_app.svg" alt="socail">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 m-t-20 no-padding">
                    <a href="#" class="p-l-40"><img src="assets/img/demo/calendar_app.svg" alt="socail">
                    </a>
                </div>
                <div class="col-xs-6 m-t-20 no-padding">
                    <a href="#" class="p-l-10"><img src="assets/img/demo/add_more.svg" alt="socail">
                    </a>
                </div>
            </div>
        </div>
        <!-- END LEFT MENU TOP TRAY CONTENT-->
        <!-- BEGIN LEFT MENU HEADER-->
        <div class="sidebar-header">
            <span class="brand"><a class="h4 text-white">Beng</a></span>
            <div class="sidebar-header-controls float-right">
                <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20 hidden-md-down" data-pages-toggle="#appMenu">
                    <i class="fa fa-angle-down fs-16"></i>
                </button>
            </div>
        </div>
        <!-- END LEFT MENU HEADER-->

        <!-- START SIDEBAR MENU -->
        <?= \bengbeng\framework\widgets\menu\StrongMenu::widget([
            'type' => \bengbeng\framework\widgets\menu\StrongMenu::TYPE_LEFT,
            'layout' => '@bengbeng/admin/views/beng/widgets/menu-left'
        ])?>
        <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END NAV-->

    <div class="page-container">
        <div class="header">
            <!-- START MOBILE SIDEBAR TOGGLE -->
            <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
            </a>
            <!-- END MOBILE SIDEBAR TOGGLE -->
            <div>
                <div class="brand inline">
                    <span class="brand"><a class="h4 text-black">Beng</a></span>
                </div>
                <!-- START NOTIFICATION LIST -->
                <?= \bengbeng\admin\widgets\information\ToolTips::widget()?>
                <!-- END NOTIFICATIONS LIST -->
                <a href="#" class="search-link hidden-md-down" data-toggle="search"><i class="pg-search"></i>输入想要的内容 <span class="bold">搜搜看</span></a>
            </div>
            <div class="d-flex align-items-center">
                <!-- START User Info-->
                <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down">
                    <span class="semi-bold">hahastein</span> <span class="text-master">管理员</span>
                </div>
                <div class="dropdown pull-right hidden-md-down">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="thumbnail-wrapper d32 circular inline">
                            <img src="<?=TemplateHandle::getImgToTheme('img/avatar_d.png')?>" alt="" data-src="<?=TemplateHandle::getImgToTheme('img/avatar_d.png')?>" data-src-retina="<?=TemplateHandle::getImgToTheme('img/avatar_d@2x.png')?>" width="32" height="32">
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a href="#" class="dropdown-item"><i class="pg-settings_small"></i> 设置</a>
                        <a href="#" class="dropdown-item"><i class="pg-outdent"></i> 微信</a>
                        <a href="#" class="dropdown-item"><i class="pg-signals"></i> 帮助</a>
                        <a href="#" class="clearfix bg-master-lighter dropdown-item">
                            <span class="pull-left">注销</span>
                            <span class="pull-right"><i class="pg-power"></i></span>
                        </a>
                    </div>
                </div>
                <!-- END User Info-->
                <a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
            </div>
        </div>

    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
