<?=\bengbeng\admin\widgets\tools\BreadcrumbWidget::widget([
    'title' => '商户管理系统',
    'menu' => ['商户管理' => \bengbeng\framework\components\helpers\UrlHelper::to('merchant/store'), '添加商户' => ''],

]) ?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body wizard-content">
                <h4 class="card-title">添加商户</h4>
                <h6 class="card-subtitle">添加店铺，请先填写一个账号，如果有分店，请在设置分店</h6>
                <form action="#" class="tab-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6>账号设置</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstName1">商户名称 :</label>
                                    <input type="text" class="form-control" id="firstName1">
                                    <small>商户名称</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastName1">会员账号 :</label>
                                    <input type="text" class="form-control" id="lastName1">
                                    <small>用户会员登录使用，不填写则不跟前台会员绑定</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailAddress1">店铺账号 :</label>
                                    <input type="email" class="form-control" id="emailAddress1">
                                    <small>用户商户后台登录使用</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1">登录密码 :</label>
                                    <input type="tel" class="form-control" id="phoneNumber1">
                                    <small>用户前台后台的登录密码</small>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location1">Select City :</label>
                                    <select class="custom-select form-control" id="location1" name="location">
                                        <option value="">Select City</option>
                                        <option value="Amsterdam">India</option>
                                        <option value="Berlin">USA</option>
                                        <option value="Frankfurt">Dubai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date1">Date of Birth :</label>
                                    <input type="date" class="form-control" id="date1"> </div>
                            </div>
                        </div>
                        -->
                    </section>
                    <!-- Step 2 -->
                    <h6>店铺信息</h6>
                    <section>
                        <div class="form-group">
                            <h3 class="box-title">基础设置</h3>
                            <hr class="m-t-0 m-b-20">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="storeType">商户类型 :</label>
                                        <select class="form-control" id="storeType">
                                            <option value="" selected="selected">--个人或者公司--</option>
                                            <option value="personal">个人</option>
                                            <option value="company">公司</option>
                                        </select>
                                        <small class="text-primary">店铺的所属类型，仅支持个人与公司</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="storeCate">所属分类 :</label>
                                        <select class="form-control" id="storeCate">
                                            <option value="" selected="selected">--请选择--</option>
                                            <option value="1">A1</option>
                                            <option value="2">A2</option>
                                        </select>
                                        <small class="text-primary">店铺的经营类型，不影响实际售卖类型</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="storeCity">所在地 :</label>
                                        <select class="form-control" id="storeCity">
                                            <option value="" selected="selected">--请选择--</option>
                                            <option value="bj">北京</option>
                                            <option value="sh">上海</option>
                                        </select>
                                        <small class="text-primary">店铺所在地，如是企业，请选择企业注册所在地</small>
                                    </div>
                                </div>
                            </div>
                            <h3 class="box-title">支持功能</h3>
                            <hr class="m-t-0 m-b-20">
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label>电商:</label>
                                    <div class="custom-control custom-checkbox bg-white radius">
                                        <div class="p-l-10 p-t-10 p-b-5">
                                            <input type="checkbox" checked="checked" name="support-tools" class="custom-control-input" id="shop">
                                            <label class="custom-control-label" for="shop">默认支持,开通后可管理电商</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>外卖:</label>
                                    <div class="custom-control custom-checkbox bg-white radius">
                                        <div class="p-l-10 p-t-10 p-b-5">
                                            <input type="checkbox" name="support-tools" class="custom-control-input" id="o2o">
                                            <label class="custom-control-label" for="o2o">开通后可管理外卖</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>CMS:</label>
                                    <div class="custom-control custom-checkbox bg-white radius">
                                        <div class="p-l-10 p-t-10 p-b-5">
                                            <input type="checkbox" checked="checked" name="support-tools" class="custom-control-input" id="cms">
                                            <label class="custom-control-label" for="cms">默认支持,可对内容进行管理</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>财务:</label>
                                    <div class="custom-control custom-checkbox bg-white radius">
                                        <div class="p-l-10 p-t-10 p-b-5">
                                            <input type="checkbox" checked="checked" name="support-tools" class="custom-control-input" id="finance">
                                             <label class="custom-control-label" for="finance">默认支持,可使用财务结算功能</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--个人信息-->
                        <div id="personal" group="storeInfoGroup" class="hide">
                            <h3 class="box-title">个人信息</h3>
                            <hr class="m-t-0 m-b-20">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="contact_name">联系人姓名 :</label>
                                        <input type="text" class="form-control" id="contact_name">
                                        <small class="text-primary">请填写身份证上的真实姓名</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="contact_phone">联系人电话 :</label>
                                        <input type="text" class="form-control" id="contact_phone">
                                        <small class="text-primary">请填写有效的联系人电话，否则会影响审核结果</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="contact_phone">邮箱地址 :</label>
                                        <input type="text" class="form-control" id="contact_email">
                                        <small class="text-primary">请填写有效的邮箱地址，验证所使用</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sfz-zm">上传身份证-正面 (复印件、手机拍照均可):</label>
                                        <input type="file" id="sfz-zm" class="dropify" />
                                        <small class="text-primary">请上传清晰有效的身份证正面</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sfz-fm">上传身份证反面 (复印件、手机拍照均可):</label>
                                        <input type="file" id="sfz-fm" class="dropify" />
                                        <small class="text-primary">请上传清晰有效的身份证反面</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="sfznum">身份证号 :</label>
                                        <input type="text" name="sfznum" id="sfznum" class="form-control" />
                                        <small class="text-primary">身份证号上传后可自动获取，如果有误，请手动更改</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">详细地址 :</label>
                                        <textarea name="address" id="address" rows="2" class="form-control"></textarea>
                                        <small class="text-primary">个人请填写住址，企业请填写公司所在地址</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--公司信息-->
                        <div id="company" group="storeInfoGroup" class="hide">
                            <h4 class="card-title">公司信息</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="shortDescription1">详细地址 :</label>
                                        <textarea name="shortDescription" id="shortDescription1" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 3 -->
                    <h6>分店设置</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="int1">Interview For :</label>
                                    <input type="text" class="form-control" id="int1"> </div>
                                <div class="form-group">
                                    <label for="intType1">Interview Type :</label>
                                    <select class="custom-select form-control" id="intType1" data-placeholder="Type to search cities" name="intType1">
                                        <option value="Banquet">Normal</option>
                                        <option value="Fund Raiser">Difficult</option>
                                        <option value="Dinner Party">Hard</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Location1">Location :</label>
                                    <select class="custom-select form-control" id="Location1" name="location">
                                        <option value="">Select City</option>
                                        <option value="India">India</option>
                                        <option value="USA">USA</option>
                                        <option value="Dubai">Dubai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jobTitle2">Interview Date :</label>
                                    <input type="date" class="form-control" id="jobTitle2">
                                </div>
                                <div class="form-group">
                                    <label>Requirements :</label>
                                    <div class="c-inputs-stacked">
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Employee</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Contract</span> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 4 -->
                    <h6>财务信息</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="behName1">Behaviour :</label>
                                    <input type="text" class="form-control" id="behName1">
                                </div>
                                <div class="form-group">
                                    <label for="participants1">Confidance</label>
                                    <input type="text" class="form-control" id="participants1">
                                </div>
                                <div class="form-group">
                                    <label for="participants1">Result</label>
                                    <select class="custom-select form-control" id="participants1" name="location">
                                        <option value="">Select Result</option>
                                        <option value="Selected">Selected</option>
                                        <option value="Rejected">Rejected</option>
                                        <option value="Call Second-time">Call Second-time</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="decisions1">Comments</label>
                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Rate Interviwer :</label>
                                    <div class="c-inputs-stacked">
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                                        <label class="inline custom-control custom-checkbox block">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>