<div class="row page-titles">
    <div class="col-6 align-self-center">
        <h4 class="text-themecolor"><strong><?=$title?></strong></h4>
        <ol class="breadcrumb">
            <?php foreach ($menu as $key => $item): ?>
                <?php if(empty($item)):?>
                    <li class="breadcrumb-item active"><?=$key?></li>
                <?php else: ?>
                    <li class="breadcrumb-item"><a href="<?=$item?>"><?=$key?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ol>
    </div>
    <div class="col-6 align-self-center text-right">
        <div class="d-block justify-content-end align-items-center">

            <?php foreach ($rightBtn as $key => $item): ?>
                <?php if($key == 'a'):?>
                    <a class="btn btn-info d-lg-block m-l-15 float-right" href="<?=$item['href']?>"> <?=$item['title']?></a>
                <?php else: ?>
                    <button type="button" class="btn btn-info d-lg-block m-l-15 float-right" data-toggle="modal" data-target="#<?=$item['target']?>"><i class="fa fa-plus-circle"></i> <?=$item['title']?></button>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>
    </div>
</div>