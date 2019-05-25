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
                    <h4 class="card-title">Alert with content </h4>
                    <h6 class="card-subtitle">Alerts can also contain additional HTML elements </h6>

                    <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        <h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Warning</h3> This is an example top alert. You can edit what u wish. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
