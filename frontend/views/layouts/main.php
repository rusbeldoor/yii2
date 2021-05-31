<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use frontend\components\Menu;
use kartik\nav\NavX;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <? $menu = new Menu();
    NavBar::begin([
        'brandLabel' => Yii::$app->params['projectName'],
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'menu-navbar navbar-dark bg-dark navbar-expand-md'],
    ]);
    echo Nav::widget(['options' => ['class' => 'navbar-nav navbar-right'], 'items' => $menu->menu]);
    NavBar::end(); ?>

    <div class="container">
        <?= NavX::widget(['options' => ['class'=>'menu-pills nav nav-pills'], 'items' => ((isset($this->params['navX'])) ? $this->params['navX'] : [])]); ?>
        <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left"><? $year = date('Y'); echo ((Yii::$app->params['projectYear'] == $year) ? $year : Yii::$app->params['projectYear'] . ' — ' . date('Y')); ?> &copy; <?= Yii::$app->params['projectName'] ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
