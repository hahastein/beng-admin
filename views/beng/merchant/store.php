<?=\bengbeng\admin\widgets\tools\BreadcrumbWidget::widget([
    'title' => '商户管理系统',
    'menu' => ['商户管理' => ''],
    'rightButtons' => [
        'btn' => [
            'title' => '添加商户',
            'target' => 'add-store',
            'modalParams' => [
                'submitType' => \bengbeng\admin\components\enum\AdminEnum::ADMIN_SUBMIT_TYPE_AJAX,
                'submitUrl' => \bengbeng\framework\components\helpers\UrlHelper::to('merchant/store-save'),
                'control' => [[
                    'adminName' => [
                        'model' => 'store-name',
                        'label' => '商户名称',
                        'placeholder' => '请填写商户名称',
                        'tip' => '请按规则填写商户名称',
                        'type' => 'input.text',
                    ]
                ]]
            ]
        ]
    ]
]) ?>