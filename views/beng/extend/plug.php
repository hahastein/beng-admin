<?=\bengbeng\admin\widgets\tools\BreadcrumbWidget::widget([
    'title' => '扩展管理',
    'menu' => ['扩展管理列表' => ''],
    'rightButtons' => [
        'btn' => [
            'title' => '添加扩展',
            'target' => 'add-extend',
            'modalParams' => [
                'submitType' => \bengbeng\admin\components\enum\AdminEnum::ADMIN_SUBMIT_TYPE_POST,
                'submitUrl' => \bengbeng\framework\components\helpers\UrlHelper::to('extend/save'),
                'control' => [[
                    'showName' => [
                        'model' => 'show_name',
                        'label' => '扩展名称(显示使用)',
                        'placeholder' => '请填写扩展的显示名称',
                        'tip' => '只作为显示使用的名字',
                        'type' => 'input.text',
                    ]],
                    ['extendName' => [
                        'model' => 'extend_name',
                        'label' => '扩展名称',
                        'placeholder' => '请填写扩展的名称',
                        'tip' => '格式为：beng-extend-xxx(xxx为您的名称)',
                        'type' => 'input.text',
                    ]],
                    ['extendNamespace' => [
                        'model' => 'extend_namespace',
                        'label' => '扩展的命名空间',
                        'placeholder' => '请填写扩展的命名空间',
                        'tip' => '格式为：bengbeng/extend/xxx(xxx为您项目的名称)',
                        'type' => 'input.text',
                    ]],
                    ['extendVendorPath' => [
                        'model' => 'extend_vendor_path',
                        'label' => '扩展所放的路径',
                        'placeholder' => '请填写扩展所放路径',
                        'tip' => '不填写则为系统匹配。如填写，格式为：beng-extend-xxx(xxx为您的名称)',
                        'type' => 'input.text',
                    ]]
                ]
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
                                    <a href="<?=\yii\helpers\Url::to(['extend/plug'])?>" class="btn btn-secondary">全部</a>
                                    <a href="<?=\yii\helpers\Url::to(['extend/plug', 't' => 'system'])?>" class="btn btn-secondary">系统扩展</a>
                                    <a href="<?=\yii\helpers\Url::to(['extend/plug', 't' => 'third'])?>" class="btn btn-secondary">第三方扩展</a>
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
                                    <a class="btn btn-info" href="#" >卸载</a>
                                    <?php else: ?>
                                    <a class="btn btn-danger" href="#" >安装</a>
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