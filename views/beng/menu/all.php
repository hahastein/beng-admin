<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">菜单管理</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= \yii\helpers\Url::to(['/'])?>">首页</a></li>
                <li class="breadcrumb-item active">菜单管理</li>
            </ol>
            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> 创建菜单</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body p-b-0">
                <h4 class="card-title">商品分类管理</h4>
                <h6 class="card-subtitle">商品分类及Tag标签管理 </h6> </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-menu"></i></span> <span class="hidden-xs-down">菜单管理</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-upload"></i></span> <span class="hidden-xs-down">菜单导入</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-list"></i></span> <span class="hidden-xs-down">菜单分类管理</span></a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home2" role="tabpanel">
                    <div class="p-20">
                        <h3>一级菜单</h3>
                        <h4>显示所有菜单，按类型进，如前台，后台，APP等进行管理</h4>
                        <p>1、删除菜单不会对功能进行删除</p>
                    </div>

                    <div class="p-20 p-t-0">
                        <div class="table-responsive">
                            <table class="table color-table purple-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>菜单名称</th>
                                        <th>上级菜单</th>
                                        <th>Icon</th>
                                        <th>类型</th>
                                        <th>控制器/方法</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nigam</td>
                                        <td>Eichmann</td>
                                        <td>@Sonu</td>
                                        <td>@Sonu</td>
                                        <td>@Sonu</td>
                                        <td>删除</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="tab-pane p-20" id="profile2" role="tabpanel">2</div>
                <div class="tab-pane p-20" id="messages2" role="tabpanel">3</div>
            </div>
        </div>
    </div>
</div>