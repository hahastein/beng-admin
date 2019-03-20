<?php
use yii\helpers\Url;
?>

<?php foreach ($menus as $menu): ?>
    <li>
        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="<?=empty($menu['menu_icon'])?"icon-speedometer":$menu['menu_icon']?>"></i><span class="hide-menu"><?=$menu['menu_name']?><?php if(!empty($menu['badge']) && $menu['badge'] > 0): ?><span class="badge badge-pill badge-cyan ml-auto"><?=$menu['badge']?></span><?php endif;?></span></a>
        <?php if(!empty($menu['parent'])): ?>
        <ul aria-expanded="false" class="collapse">
            <?php foreach ($menu['parent'] as $parent): ?>
            <li><a href="<?= Url::to(['/'.$parent['module'].'/'.$parent['controller'].'/'.$parent['action']]) ?>"><?=$parent['menu_name']?></a></li>
            <?php endforeach;?>
        </ul>
        <?php endif;?>
    </li>
<?php endforeach;?>