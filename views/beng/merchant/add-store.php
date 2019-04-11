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
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>支持功能 <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="shop">
                                                <label class="custom-control-label" for="shop">电商</label>

                                                <input type="checkbox" class="custom-control-input" id="o2o">
                                                <label class="custom-control-label" for="o2o">外卖</label>

                                                <input type="checkbox" class="custom-control-input" id="cms">
                                                <label class="custom-control-label" for="cms">CMS</label>

                                                <input type="checkbox" class="custom-control-input" id="finance">
                                                <label class="custom-control-label" for="finance">财务</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--个人信息-->
                        <div id="personal" group="storeInfoGroup" class="hide">
                            <h4 class="card-title">个人信息</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_name">联系人姓名 :</label>
                                        <input type="text" class="form-control" id="contact_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_phone">联系人电话 :</label>
                                        <input type="text" class="form-control" id="contact_phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="shortDescription1">详细地址 :</label>
                                        <textarea name="shortDescription" id="shortDescription1" rows="2" class="form-control"></textarea>
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