<?=\bengbeng\admin\widgets\tools\BreadcrumbWidget::widget([
    'title' => '扩展管理',
    'menu' => ['扩展管理列表' => ''],
    'rightButtons' => [
        'btn' => [
            'title' => '添加扩展',
            'target' => 'add-extend',
            'modalParams' => [
                'submitType' => \bengbeng\admin\components\enum\AdminEnum::ADMIN_SUBMIT_TYPE_AJAX,
                'submitUrl' => \bengbeng\framework\components\helpers\UrlHelper::to('extend/save'),
                'control' => [[
                    'adminName' => [
                        'model' => 'extend_name',
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
                <h4 class="card-title">扩展管理</h4>
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
                            <th>扩展名称</th>
                            <th>命名空间</th>
                            <th>版本</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($dataSet as $item): ?>
                            <tr>
                                <td><?=$item['extend_id']; ?></td>
                                <td>
                                    <?=$item['show_name']; ?>
                                    <br>
                                    <small><?=$item['extend_name']; ?></small>
                                </td>
                                <td>
                                    <?=$item['extend_namespace']; ?>
                                </td>
                                <td><?=$item['extend_version']; ?></td>
                                <td>
                                    <?=$item['isSetup']?'已安装':'未安装'?>
                                </td>
                                <td>
                                    <?php if($item['isSetup']): ?>
                                    <a class="btn btn-info" href="#" >安装</a>
                                    <?php else: ?>
                                    <a class="btn btn-danger" href="#" >卸载</a>
                                    <?php endif; ?>
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