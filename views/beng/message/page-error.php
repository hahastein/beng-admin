<?php
use yii\helpers\Html;

?>

<?=\bengbeng\admin\widgets\tools\BreadcrumbWidget::widget([
    'title' => '页面错误提示',
    'menu' => ['错误提示' => ''],
]) ?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="col-lg-12 col-md-12">
                    <h4 class="card-title">
                        Alert with content
                    </h4>
                    <h6 class="card-subtitle">
                        Alerts can also contain additional HTML elements
                    </h6>

                    <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="text-warning">
                            <i class="fa fa-exclamation-triangle"></i> 温馨提示
                        </h3>

                        <div class="ml-3">
                            <ul class="mb-0">
                                <?php foreach (explode('\n',$content) as $item):?>
                                <li><?=$item?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    </div>

                    <div class="alert alert-success alert-rounded">
                        <i class="ti-time"></i>
                        页面自动 <a id="href" href="<?php echo($url); ?>">跳转</a> 等待时间： <b id="wait"><?='3秒' ?></b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>

                    <a class="btn btn-primary btn-lg" href="/" role="button">返回首页</a>
                    <a class="btn btn-primary btn-lg" href="/system/document/main" role="button">查看文档</a>

                </div>



            </div>
        </div>
    </div>
</div>
