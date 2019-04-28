<!-- PostForm Pop Model -->
<div id="<?=$modalID?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><?=$modalText?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form id="<?= $formName ?>" name="<?= $formName ?>" action="<?= $submitUrl ?>" method="<?= $submitType ?>">
                <div class="modal-body">
                    <div class="form-body">
                        <?php foreach ($controls as $index => $row): ?>
                        <div class="row<?=$index==0?' p-t-20':''?>">
                            <?php foreach ($row as $key => $control): ?>
                                <div class="col-md-<?=isset($control['row'])?$control['row']:12/count($row)?>">
                                    <div class="form-group has-success">
                                        <label class="control-label"><?=$control['label']?></label>
                                        <?=$control['control']?><small class="form-control-feedback"> <?=$control['tip']?> </small> </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="modal-footer">
                    <input name="_csrf-factory" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken; ?>">
                    <button name="submitSave" type="submit" class="btn btn-info waves-effect">保存</button>
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">关闭</button>
                </div>
            </form>
        </div>
    </div>
</div>