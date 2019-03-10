<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">综合首页</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= \yii\helpers\Url::to(['/'])?>">首页</a></li>
            </ol>

        </div>
    </div>
</div>

<div class="row">
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">商品订单量</h5>
                <div class="stats-row m-t-20 m-b-20">
                    <div class="stat-item">
                        <h6>当月</h6> <b>1230</b><small>单</small></div>
                    <div class="stat-item">
                        <h6>7日</h6> <b>560</b><small>单</small></div>
                    <div class="stat-item">
                        <h6>当日</h6> <b>102</b><small>单</small></div>
                </div>
            </div>
            <?=\bengbeng\admin\widgets\chart\SparklineWidget::widget([
                    'clientID' => 'so',
                'sarkData' => [89, 75, 86, 78, 98, 101]
            ]); ?>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">外卖订单量</h5>
                <div class="stats-row m-t-20 m-b-20">
                    <div class="stat-item">
                        <h6>Growth</h6> <b>80.40%</b></div>
                    <div class="stat-item">
                        <h6>Montly</h6> <b>20.40%</b></div>
                    <div class="stat-item">
                        <h6>Daily</h6> <b>5.40%</b></div>
                </div>
            </div>
            <?=\bengbeng\admin\widgets\chart\SparklineWidget::widget([
                'clientID' => 'wm',
                'sarkData' => [12, 14, 15, 11, 9, 18]
            ]); ?>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">销售额</h5>
                <div class="stats-row m-t-20 m-b-20">
                    <div class="stat-item">
                        <h6>Growth</h6> <b>80.40%</b></div>
                    <div class="stat-item">
                        <h6>Montly</h6> <b>20.40%</b></div>
                    <div class="stat-item">
                        <h6>Daily</h6> <b>5.40%</b></div>
                </div>
            </div>
            <?=\bengbeng\admin\widgets\chart\SparklineWidget::widget([
                'clientID' => 'sc',
                'sarkData' => [1560, 1450, 1301, 1680, 1710, 1010]
            ]); ?>
        </div>
    </div>
    <!-- Column -->
</div>