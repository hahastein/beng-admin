<?=\bengbeng\admin\widgets\tools\BreadcrumbWidget::widget([
    'title' => '页面资源文件管理',
    'menu' => ['页面资源管理' => ''],
    'rightButtons' => [
        'btn' => [
            'title' => '创建资源',
            'target' => 'add-resource'
        ]
    ]
]) ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">页面资源管理</h4>
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
                            <th>页面标题</th>
                            <th>控制器/方法</th>
                            <th>最后更新时间</th>
                            <th>类型</th>
                            <th>资源文件</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($dataSet as $item): ?>
                            <tr>
                                <td><?=$item['page_id']; ?></td>
                                <td>
                                    <?=$item['title']; ?>
                                    <?php if(!$item['isCache']): ?>
                                    <span class="label label-primary">无缓存</span>
                                    <?php endif; ?>
                                </td>
                                <td><?=$item['router']; ?></td>
                                <td><?=date('Y-m-d',$item['last_time']); ?></td>
                                <td><?=$item['css_order']; ?></td>
                                <td>
                                    <button data-toggle="modal" data-id="<?=$item['page_id']; ?>" data-type="css" data-target="#tooltipmodals" class="btn btn-rounded btn-secondary waves-effect waves-light" type="button"><span class="btn-label"><i class="icon-eye"></i></span> CSS资源</button>
                                    <button data-toggle="modal" data-id="<?=$item['page_id']; ?>" data-type="js" data-target="#tooltipmodals" class="btn btn-rounded btn-secondary waves-effect waves-light" type="button"><span class="btn-label"><i class="icon-eye"></i></span> JS资源</button>
                                    <div class="hide">
                                        <div id="r_css">
                                            <?php foreach ($item['css_resource'] as $key => $css): ?>
                                                <?= $key>0?'<hr>':'' ?>
                                                <h5 class="d-flex">
                                                    <?=$css?><span class="ml-auto">删除</span>
                                                </h5>
                                            <?php endforeach;?>
                                        </div>
                                        <div id="r_js">
                                            <?php foreach ($item['js_resource'] as $key => $js): ?>
                                                <?= $key>0?'<hr>':'' ?><h5><?=$js?></h5>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?php if($item['isCache']): ?>
                                        <a href="<?=\yii\helpers\Url::to(['/'.Yii::$app->controller->module->id.'/page/update-cache', 'id'=>$item['page_id']]) ?>" class="btn waves-effect waves-light btn-rounded btn-success">更新缓存</a>
                                    <?php else: ?>
                                        <a href="<?=\yii\helpers\Url::to(['/'.Yii::$app->controller->module->id.'/page/add-cache', 'id'=>$item['page_id']]) ?>" class="btn waves-effect waves-light btn-rounded btn-info">添加缓存</a>
                                    <?php endif; ?>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-info">删除</button>
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

<div id="tooltipmodals" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tooltipmodel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="tooltipmodel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">添加一行</button>
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">关闭</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

