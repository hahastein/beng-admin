<?php
$this->registerJs(
    '$(function(){
       $("#waitBtn").click(function(){
            if($("#waitBtn i").attr("class") == "ti-control-pause"){
                $("#waitBtn i").attr("class","ti-control-play");
                doPause();
            }else{
                $("#waitBtn i").attr("class","ti-control-pause");
                after();
            }
       });
       after();
    });
    var href=$("#href").attr("href");
    var i='.$wait.';
    var waitTime = null;
    function doPause(){
        if(waitTime!=null){
            clearTimeout(waitTime);waitTime=null;
        }
    }
    function after(){
        if(i==0){
            location.href=href;clearTimeout(waitTime);waitTime=null;
        }else{
            $("#wait").empty().append(i);
            i=i-1;
            waitTime = setTimeout(function(){
                after();
            },1000);
        }
    }'
);
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
<!--                        <button type="button" class="close" data-dismiss="close" aria-label="Close">-->
<!--                            <span aria-hidden="true">&times;</span>-->
<!--                        </button>-->
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
                        页面自动 <a id="href" href="<?=$url?>">跳转</a> 等待时间： <b id="wait"><?=$wait?></b>秒
                        <button type="button" class="close" id="waitBtn"> <i class="ti-control-pause"></i> </button>
                    </div>

                    <a class="btn btn-primary" href="/" role="button">返回首页</a>
                    <a class="btn btn-primary" href="<?=$url?>" role="button">返回来源</a>
                    <a class="btn btn-primary" href="/system/document/main" role="button">查看文档</a>

                </div>



            </div>
        </div>
    </div>
</div>
