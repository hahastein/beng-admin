<?php
use yii\helpers\Html;

\bengbeng\admin\components\assets\AdminLoginAsset::register($this);
?>
<?php $this->beginPage() ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="<?= Yii::$app->language ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <?= Html::csrfMetaTags() ?>
        <title>登录<?= Html::encode(Yii::$app->name) ?></title>
        <?= $this->head(); ?>
    </head>

    <body>
<?php $this->beginBody() ?>
        <?= $content ?>
<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

