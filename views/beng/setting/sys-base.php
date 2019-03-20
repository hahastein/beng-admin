<?=\bengbeng\admin\widgets\tools\BreadcrumbWidget::widget([
    'title' => '平台基础设置',
    'menu' => ['基础设置' => '']
]) ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body p-b-0">
                <h4 class="card-title">基础公共设置</h4>
                <h6 class="card-subtitle">可对后台，前台的公共设置，移动支付的设置等等 </h6> </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#setbase" role="tab"><span class="hidden-sm-up"><i class="ti-settings"></i></span> <span class="hidden-xs-down">系统基础设置</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#setpay" role="tab"><span class="hidden-sm-up"><i class="ti-credit-card"></i></span> <span class="hidden-xs-down">支付相关设置</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#setnotice" role="tab"><span class="hidden-sm-up"><i class="ti-bell"></i></span> <span class="hidden-xs-down">消息通知设置</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#setshop" role="tab"><span class="hidden-sm-up"><i class="ti-shopping-cart"></i></span> <span class="hidden-xs-down">商品设置</span></a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="setbase" role="tabpanel">
                    <form method="post">
                        <div class="p-20">
                            <h4 class="card-title"><strong>后台基础设置</strong></h4>
                            <h5>标题、描述、各Logo、等配置</h5>
                        </div>
                        <div class="row p-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>公共标题(Title) <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="title" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    <div class="form-control-feedback"><small>设置后，所有在浏览器标题上看到的前缀，如(BengBeng Framework)</small></div>
                                </div>
                                <div class="form-group">
                                    <h5>平台客服联系电话 <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="phone" name="phone" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>备案号 </h5>
                                    <div class="controls">
                                        <input type="text" name="icp" class="form-control"> </div>
                                    <div class="form-control-feedback"><small>前台底部显示ICP备案信息，如果网站已备案，在此输入你的备案号。如果没有请留空</small></div>
                                </div>
                                <div class="form-group">
                                    <h5>网站地址 <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="url" name="url" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-20 p-t-0">
                            <button type="submit" class="btn btn-success mr-2">提交保存</button>
                            <button type="submit" class="btn btn-dark">取消</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="setpay" role="tabpanel">
                    <div class="p-20">
                        <h4 class="card-title"><strong>支付配置</strong></h4>
                        <h5>网站，App、小程序等支付设置</h5>
                    </div>
                    <div class="p-20 p-t-0">

                    </div>
                </div>
                <div class="tab-pane p-20" id="setnotice" role="tabpanel">3</div>
                <div class="tab-pane p-20" id="setshop" role="tabpanel">4</div>
            </div>
        </div>
    </div>
</div>
