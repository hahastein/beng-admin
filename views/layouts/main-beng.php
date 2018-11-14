<?php
use yii\helpers\Html;
use bengbeng\admin\TemplateAsset;

TemplateAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=<?= Yii::$app->language ?>" />
    <meta charset="<?= Yii::$app->language ?>" />
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
<body class="fixed-header menu-pin">
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
            <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20 hidden-md-down" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
            </button>
            <button type="button" class="btn btn-link hidden-md-down" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
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

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
