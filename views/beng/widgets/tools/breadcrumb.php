<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor"><?=$title?></h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <?php foreach ($menu as $key => $item): ?>
                    <?php if(empty($item)):?>
                        <li class="breadcrumb-item active"><?=$key?></li>
                    <?php else: ?>
                        <li class="breadcrumb-item"><a href="<?=$item?>"><?=$key?></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ol>
            <?php foreach ($rightBtn as $key => $item): ?>
                <?php if($key == 'a'):?>
                <a class="btn btn-info d-none d-lg-block m-l-15" href="<?=$item['href']?>"> <?=$item['title']?></a>
                <?php else: ?>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="<?=$item['target']?>"><i class="fa fa-plus-circle"></i> <?=$item['title']?></button>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>