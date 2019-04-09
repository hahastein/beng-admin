<?=\bengbeng\admin\widgets\tools\BreadcrumbWidget::widget([
    'title' => '商户管理系统',
    'menu' => ['商户管理' => ''],
    'rightButtons' => [
        'a' => [
            'title' => '添加商户',
            'target' => 'add-store',
            'href' => \bengbeng\framework\components\helpers\UrlHelper::to('merchant/add-store')
        ]
    ]
]) ?>