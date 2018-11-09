<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use bengbeng\framework\components\helpers\AdminHelper;
use bengbeng\admin\TemplateAsset;
use bengbeng\admin\components\handles\TemplateHandle;

TemplateAsset::register($this);

?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->language ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name .'-' . $this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<div id="wrapper">
    <!--loading left view-->
    <nav class="navbar-default navbar-static-side" role="navigation" id="navbar-left">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <?php if(!Yii::$app->user->isGuest) { ?>
                    <li class="nav-header">
                        <div class="dropdown profile-element">

                            <img alt="管理员头像" class="rounded-circle" src="<?=TemplateHandle::getImgToTheme('default_avatar.png')?>" />

                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">
                                    <?= Yii::$app->user->identity->admin_nickname?>(<?= Yii::$app->user->identity->admin_name ? Yii::$app->user->identity->admin_name : '' ?>)
                                </span>
                                <span class="text-muted text-xs block">
                                    <?= AdminHelper::getAdminType(true); ?>
                                    <b class="caret"></b>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="<?= Url::to(['user/info']) ?>">个人资料</a></li>
                                <li><a class="dropdown-item" href="<?= Url::to(['user/message']) ?>">消息管理</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= Url::to(['site/logout']) ?>">退出系统</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            Beng
                        </div>
                    </li>
                    <?= \bengbeng\framework\widgets\menu\StrongMenu::widget([
                        'type' => \bengbeng\framework\widgets\menu\StrongMenu::TYPE_LEFT
                    ])?>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <!--loading main content-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <!--loading toolbar content-->
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="<?= Url::to(['search/all']) ?>">
                        <div class="form-group">
                            <input type="text" placeholder="试试搜索你想要的任何数据..." class="form-control" name="keyword" id="keyword">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li style="padding: 20px">
                        <span class="m-r-sm text-muted welcome-message">欢迎来到<?= Html::encode(Yii::$app->name) ?></span>
                    </li>

                    <?= \bengbeng\admin\widgets\information\ToolTips::widget()?>

                    <li>
                        <a href="<?= Url::to(['site/logout']) ?>">
                            <i class="fa fa-sign-out"></i> 退出系统
                        </a>
                    </li>
                    <li>
                        <a class="right-sidebar-toggle">
                            <i class="fa fa-tasks"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--loading view-->
        <?= $content ?>
        <div id="right-sidebar" class="animated">
            <div class="sidebar-container">
                <ul class="nav nav-tabs navs-2">
                    <li class="active"><a data-toggle="tab" href="#tab-1">
                            商户
                        </a></li>
                    <li><a data-toggle="tab" href="#tab-2">
                            项目
                        </a></li>
                </ul>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> 待处理的商户申请</h3>
                            <small><i class="fa fa-tim"></i> 目前还有10个商户的申请需要处理.</small>
                        </div>
                        <div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="<?=TemplateHandle::getImgToTheme('default_avatar.png')?>">
                                        <!---->
                                        <!--                                        <div class="m-t-xs">-->
                                        <!--                                            <i class="fa fa-star text-warning"></i>-->
                                        <!--                                            <i class="fa fa-star text-warning"></i>-->
                                        <!--                                        </div>-->
                                    </div>
                                    <div class="media-body">
                                        商户A
                                        <br>
                                        <small class="text-muted">申请人:aaa <span class="pull-right">今天21:00</span></small>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>
                    <div id="tab-2" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-cube"></i> 项目更新历史</h3>
                            <small><i class="fa fa-tim"></i> 目前版本是测试第一版.</small>
                        </div>

                        <ul class="sidebar-list">
                            <li>
                                <a href="#">
                                    <span class="label label-primary pull-right">NEW</span>
                                    <h4>竹迹 V1 Beta1 0010</h4>
                                    底层设计，管理员模型，用户模型。
                                    <div class="small">完成进度: 90%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 90%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> <?= Html::encode(Yii::$app->name) ?> &copy; 2018
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
