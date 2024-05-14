<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\bootstrap5\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="<?php echo yii::$app->params['siteURL']; ?>/dist/img/favicon.png" rel="icon">
    <link href="<?php echo yii::$app->params['siteURL']; ?>/dist/img/" rel="apple-touch-icon">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="<?php echo yii::$app->params['siteURL']; ?>/dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo yii::$app->params['siteURL']; ?>/dist/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo yii::$app->params['siteURL']; ?>/dist/css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <?php echo $this->render("header"); ?>
    <?php echo $this->render("nav-left"); ?>
    <main id="main" class="main">
        <?php echo $content; ?>
    </main>
    <?php echo $this->render("footer"); ?>
    <script src="<?php echo yii::$app->params['siteURL']; ?>/dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>   
    <script src="<?php echo yii::$app->params['siteURL']; ?>/dist/js/main.js"></script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>