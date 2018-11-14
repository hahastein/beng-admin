<?php
use yii\helpers\Html;
use bengbeng\admin\TemplateAsset;

TemplateAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=<?= Yii::$app->language ?>" />
    <meta charset="<?= Yii::$app->language ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <?= Html::csrfMetaTags() ?>
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <title><?= Html::encode(Yii::$app->name .'-' . $this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="fixed-header dashboard">
<?php $this->beginBody() ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
