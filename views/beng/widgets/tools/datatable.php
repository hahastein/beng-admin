<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body p-b-0">
                <h4 class="card-title">菜单管理</h4>
                <h6 class="card-subtitle">菜单管理及菜单分类管理 </h6> </div>
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
                        <h4>一级菜单</h4>
                        <h5>显示所有菜单，按类型进，如前台，后台，APP等进行管理</h5>
                        <p>1、删除菜单不会对功能进行删除</p>
                    </div>
                    <div class="p-20 p-t-0">
                        <div class="right-page-header">
                            <div class="d-flex">
                                <div class="align-self-center">

                                    <div class="btn-toolbar mb-3">
                                        <div class="btn-group mr-2">
                                            <a class="btn btn-secondary">后台左侧菜单</a>
                                            <a class="btn btn-secondary">前台菜单</a>
                                            <a class="btn btn-secondary">后台上部菜单</a>
                                            <a class="btn btn-secondary">商家后台菜单</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="ml-auto">
                                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fas fa-sync-alt"></i> 更新缓存</button> </div>
                            </div>
                        </div>

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
                                <?php foreach ($dataSet as $item): ?>
                                    <tr>
                                        <td><?=$item['menu_id']; ?></td>
                                        <td><?=$item['menu_name']; ?></td>
                                        <td><?=$item['parent_id']; ?></td>
                                        <td><i class="<?=$item['menu_icon']; ?>"></i> <?=$item['menu_icon']; ?></td>
                                        <td><?=$item['menu_type']; ?></td>
                                        <td><?=$item['controller']; ?>/<?=$item['action']; ?></td>
                                        <td>删除</td>
                                    </tr>
                                <?php endforeach; ?>
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