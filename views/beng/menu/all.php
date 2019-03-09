<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">菜单管理</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= \yii\helpers\Url::to(['/'])?>">首页</a></li>
                <li class="breadcrumb-item active">菜单管理</li>
            </ol>
            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> 创建菜单</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body p-b-0">
                <h4 class="card-title">Customtab Tab</h4>
                <h6 class="card-subtitle">Use default tab with class <code>customtab</code></h6> </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home2" role="tabpanel">
                    <div class="p-20">
                        <h3>Best Clean Tab ever</h3>
                        <h4>you can use it with the small code</h4>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                    </div>
                </div>
                <div class="tab-pane  p-20" id="profile2" role="tabpanel">2</div>
                <div class="tab-pane p-20" id="messages2" role="tabpanel">3</div>
            </div>
        </div>
    </div>
</div>