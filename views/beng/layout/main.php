<?php
use yii\helpers\Html;

\bengbeng\admin\TemplateAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->language ?>">
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

        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?= \yii\helpers\Url::home() ?>">
                    <!-- Logo icon -->
                    <b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="<?= \bengbeng\admin\components\handles\TemplateHandle::getImgToTheme("/images/icon-50.png") ?>" alt="Home" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <h4>
                            <strong>52Beng</strong>
                            <small>Framework</small>
                        </h4>
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                    </span>
                </a>
            </div>

            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item">
                        <form class="app-search d-none d-md-block d-lg-block">
                            <input type="text" class="form-control" placeholder="Search & enter">
                        </form>
                    </li>
                </ul>
            </div>

        </nav>

    </header>

    <aside class="left-sidebar">

        <div class="scroll-sidebar">
            <!-- 用户资料 -->
            <div class="user-profile">
                <div class="user-pro-body">
                    <div><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"></div>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="pages-login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            <!-- text-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <!--left menu bottom-->
                <li class="nav-small-cap">--- SUPPORT</li>
                <li>
                    <a class="waves-effect waves-dark" href="../documentation/documentation.html" aria-expanded="false">
                        <i class="far fa-circle text-danger"></i>
                        <span class="hide-menu">Documentation</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false">
                        <i class="far fa-circle text-success"></i>
                        <span class="hide-menu">Log Out</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false">
                        <i class="far fa-circle text-info"></i>
                        <span class="hide-menu">FAQs</span>
                    </a>
                </li>
            </ul>
        </nav>

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

