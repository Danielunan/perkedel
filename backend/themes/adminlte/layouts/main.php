<?php 

use yii\helpers\Html;

if (Yii::$app->controller->action->id === 'loginxxxxx') {
 echo $this->render(
    'main-login',
    ['content' => $content]
 );
} else {
  if (class_exists('backend\assets\AppAsset')) {
    backend\assets\AppAsset::register($this);
} else {
    app\assets\AppAsset::register($this);
}

 $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
 <meta charset="<?= Yii::$app->charset ?>"/>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    <style media="screen">
    body {
        font-family: 'Mitr', sans-serif !important;
        fort-size: 14px;
    }
    </style>    
</head>
<body>
   <?php $this->beginBody() ?>
     <div class="container mt-4">

        <?= $this->render(
            'header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>
    </div>

    <?php $this->endBody() ?>
  <script src="//cdn.jsdelivr.net/lodash/3.8.0/lodash.min.js"></script>
</body>
</html>
<?php $this->endPage() ?>
<?php } ?> 