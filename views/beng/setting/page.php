<?php
use \yii\helpers\Url;
?>
<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h4 class="m-b-10">页面资源设置</h4>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?= Url::home()?>">
                                <i class="feather icon-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">页面资源设置</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <h5>Default Styling</h5>
                            <span>use class <code>table table-styling</code> inside table element</span>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>页面名称</th>
                                        <th>Url</th>
                                        <th>缓存</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data as $item) { ?>
                                    <tr>
                                        <th scope="row"><?=$item['page_id']?></th>
                                        <td><?=$item['title']?></td>
                                        <td><?=$item['router']?></td>
                                        <td>
                                            <label class="badge <?=$item['isCache']?'badge-primary':'badge-default'?>"><?=$item['isCacheStr']?></label>
                                        </td>
                                        <td>
                                            <a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i> 修改</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>