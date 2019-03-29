<?=\bengbeng\admin\widgets\tools\BreadcrumbWidget::widget([
    'title' => '文章分类管理',
    'menu' => ['文章管理' => \yii\helpers\Url::to('/system/cms/all'), '分类管理' => ''],
    'rightButtons' => [
        'btn' => [
            'title' => '创建分类',
            'target' => 'add-cms-category',
            'modalParams' => [
                'modalText' => '添加菜单',
                'submitType' => \bengbeng\admin\components\enum\AdminEnum::ADMIN_SUBMIT_TYPE_AJAX,
                'submitUrl' => \yii\helpers\Url::to(['/system/cms/category-save']),
                'control' => [[
                    'menuName' => [
                        'model' => 'cate-name',
                        'label' => '菜单名称',
                        'placeholder' => '后台菜单(Menu)',
                        'tip' => '菜单名称不能小于2位',
                        'type' => 'input.text',
                    ]
                ],[
                    'controller' => [
                        'model' => 'controller',
                        'label' => '控制器名称',
                        'placeholder' => 'controller',
                        'tip' => '开发人员提供的控制器名称',
                        'type' => 'input.text',
                    ],
                    'action' => [
                        'model' => 'action',
                        'label' => '方法名称',
                        'placeholder' => 'action',
                        'tip' => '开发人员提供的方法名称',
                        'type' => 'input.text',
                    ]
                ],[
                    'menu_icon' => [
                        'model' => 'menu_icon',
                        'label' => 'Icon',
                        'placeholder' => 'icon-user',
                        'tip' => '写入系统提供的icon图标',
                        'type' => 'input.text',
                        'no_validate' => true
                    ],
                    'initials' => [
                        'model' => 'initials',
                        'label' => '首字母',
                        'placeholder' => 'Szm',
                        'tip' => '菜单的英文首字母',
                        'type' => 'input.text',
                    ]
                ]]

            ]
        ]
    ]
]) ?>


