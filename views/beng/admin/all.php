<?=\bengbeng\admin\widgets\tools\BreadcrumbWidget::widget([
    'title' => '系统管理员管理',
    'menu' => ['管理员列表' => ''],
    'rightButtons' => [
        'btn' => [
            'title' => '添加管理员',
            'target' => 'add-admin',
            'modalParams' => [
                'submitType' => \bengbeng\admin\components\enum\AdminEnum::ADMIN_SUBMIT_TYPE_AJAX,
                'submitUrl' => \bengbeng\framework\components\helpers\UrlHelper::to('admin/save'),
                'control' => [[
                    'adminName' => [
                        'model' => 'admin-name',
                        'label' => '管理员账号',
                        'placeholder' => '请填写管理员账号',
                        'tip' => '作为登录系统的名字，字符串+数字组成，开头不能为数字',
                        'type' => 'input.text',
                    ]
                ]]
            ]
        ]
    ]
]) ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">系统管理员管理</h4>
                <h6 class="card-subtitle">菜单管理及菜单分类管理 </h6>


                <div class="right-page-header">
                    <div class="d-flex">
                        <div class="align-self-center">

                            <div class="btn-toolbar mb-3">
                                <div class="btn-group mr-2">
                                    <a class="btn btn-secondary">全部</a>
                                    <a class="btn btn-secondary">模板B</a>
                                    <a class="btn btn-secondary">模板C</a>
                                    <a class="btn btn-secondary">模板D</a>
                                    <a class="btn btn-secondary">更多>></a>
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
                            <th>管理员账号</th>
                            <th>管理员名称</th>
                            <th>联系方式</th>
                            <th>管理员级别</th>
                            <th>最后登录时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($dataSet as $item): ?>
                            <tr>
                                <td><?=$item['admin_id']; ?></td>
                                <td>
                                    <?=$item['admin_name']; ?>
                                    <?php if($item['status'] === 0): ?>
                                        <span class="label label-primary">关闭</span>
                                    <?php endif; ?>
                                </td>
                                <td><?=$item['admin_nickname']; ?></td>
                                <td><i class="ti-email"></i><span><?=$item['admin_email']; ?></span></td>
                                <td><?=$item['admin_level']; ?></td>
                                <td><?=$item['updated_at']?date('Y-m-d', $item['updated_at']):'未登录'; ?></td>
                                <td>
                                    <?php if($item['isDel']): ?>
                                        <button type="button" class="btn waves-effect waves-light btn-rounded btn-info">删除</button>
                                        <a href="<?=\bengbeng\framework\components\helpers\UrlHelper::to('rbac/setting')?>" class="btn waves-effect waves-light btn-rounded btn-info">设置权限</a>
                                    <?php endif; ?>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-info">重置密码</button>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>