<?php
\bengbeng\admin\TemplateAsset::register($this);
?>
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">52Beng Loading</p>
    </div>
</div>
<section id="wrapper" class="login-register login-sidebar" style="background-image:url(<?= \bengbeng\admin\components\handles\TemplateHandle::getImgToTheme("/images/login_bg.jpg") ?>);">
    <div class="login-box card">
        <div class="card-body">
            <?php $form = \yii\widgets\ActiveForm::begin([
                    'id' => 'login_form',
                'enableAjaxValidation' => false,
                'enableClientValidation'=> true,
                'options' => [
                        'class' => 'form-horizontal form-material'
                ],
                'fieldConfig' => [
                        'options' => ['class' => 'col-xs-12']
                ]
            ]) ?>
                <a href="javascript:void(0)" class="db block text-center">
                    <img src="<?= \bengbeng\admin\components\handles\TemplateHandle::getImgToTheme("/images/icon-50.png") ?>" alt="Home" />
                    <br/>
                    <h4>
                        <strong>52Beng</strong>
                        <small>Framework</small>
                    </h4>
                </a>
                <div class="form-group m-t-40">
                    <?= $form->field($model, 'admin_name')->label(false)->textInput(['maxlength' => 100,'placeholder'=>'请输入用户名','class' => 'form-control']) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'admin_pwd')->label(false)->passwordInput(['maxlength' => 100,'placeholder'=>'请输入您的密码','class'=>'form-control']) ?>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" checked="checked" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">10天免登录</label>
                            </div>
                            <div class="ml-auto">
                                <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> 忘记密码?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <?= \yii\helpers\Html::submitButton('登录系统', ['class'=>'btn btn-info btn-lg btn-block text-uppercase btn-rounded','name' =>'submit-button']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <div class="social">
                            <button class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google">
                                <i aria-hidden="true" class="fab fa-google-plus-g"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        还不是管理员? <a class="text-primary m-l-5"><b>请联系您的管理员开通</b></a>
                    </div>
                </div>
            <?php \yii\widgets\ActiveForm::end(); ?>
            <form class="form-horizontal" id="recoverform" action="index.html">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>