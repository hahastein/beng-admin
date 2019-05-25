<?php
use yii\helpers\Html;

?>

<?=\bengbeng\admin\widgets\tools\BreadcrumbWidget::widget([
    'title' => '系统错误提示',
    'menu' => ['错误提示' => ''],
]) ?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="col-lg-12">
                    <h4 class="card-title">Status Code : <?=$exception->getCode()?> | Error Line : <?=$exception->getLine()?></h4>
                    <h6 class="card-subtitle">以下为系统分析出的错误信息，并以日志形式存储。</h6>
                    <div class="jumbotron">
                        <h1 class="display-3"><?= Html::encode($name) ?></h1>
                        <p class="lead">
                            <?= nl2br(Html::encode($exception->getMessage())) ?>
                        </p>
                        <hr class="my-4">
                        <pre><?=$exception->getTraceAsString()?></pre>
                        <hr class="my-4">
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="/" role="button">返回首页</a>
                            <a class="btn btn-primary btn-lg" href="/system/document/main" role="button">查看文档</a>
                        </p>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
