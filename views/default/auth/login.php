<?php
$loginAsset = \bengbeng\admin\components\assets\template\BengAsset::register($this);
?>
<!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>52Beng</strong>后台管理系统</h1>
                    <div class="description">
                        <p>
                            系统可根据您的账号权限进入不同的管理层级.
                            如需申请更多权限，请联系我们 <a href="http://www.52beng.com"><strong>BENGBENG</strong></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>登录52Beng后台</h3>
                            <p>输入您的账号密码来登录系统:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'login-form' ,'enableAjaxValidation' => false,'enableClientValidation'=> true]) ?>
                        <div class="form-group">
                            <?= $form->field($model, 'admin_name')->label('用户名')->textInput(['maxlength' => 100,'placeholder'=>'请输入用户名','class' => 'form-username form-control']) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'admin_pwd')->label('密码')->passwordInput(['maxlength' => 100,'placeholder'=>'请输入您的密码','class'=>'form-password form-control']) ?>
                        </div>
                        <label class="control-label" ><br/>忘记密码?</label>
                        <?= \yii\helpers\Html::submitButton('登录系统', ['class'=>'btn','name' =>'submit-button']) ?>
                        <?php \yii\widgets\ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 social-login">
                    <h3>其他登录方式</h3>
                    <div class="social-login-buttons">
                        <a class="btn btn-link-2" href="#">
                            <i class="fa fa-wechat"></i> 微信扫码
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>