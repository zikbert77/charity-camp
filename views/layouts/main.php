<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\components\Language;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

$selectedLanguage = Language::getSelected();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body class="roboto-regular">
<?php $this->beginBody() ?>

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">Camp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= Yii::$app->controller->action->id == 'index' ? 'active' : '' ?>" aria-current="page" href="/"><?= Yii::t('app/nav', 'Home') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= Yii::$app->controller->action->id == 'active' ? 'active' : '' ?>" href="<?= Url::to('about') ?>"><?= Yii::t('app/nav', 'About Us') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= Yii::$app->controller->action->id == 'policy' ? 'active' : '' ?>" href="<?= Url::to('policy') ?>"><?= Yii::t('app/nav', 'Usage Policy') ?></a>
                    </li>
                </ul>
                <ul class="navbar-nav language-picker">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fi fi-<?= Language::getIconCode($selectedLanguage) ?>"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach (array_diff(Language::AVAILABLE_LANGUAGE_KEYS, [$selectedLanguage]) as $language): ?>
                                <li>
                                    <a class="dropdown-item action-change-language" href="#" data-language-id="<?= $language ?>">
                                        <span class="fi fi-<?= Language::getIconCode($language) ?>"></span> <?= Language::getTitle($language) ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
                <a class="nav-item nav-link btn-custom big" href="/donation"><?= Yii::t('app', 'Make a Donation') ?></a>
            </div>
        </div>
    </nav>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <?= $content ?>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col col-xs-6 col-md-4 text-center text-md-start order-2 order-md-1">
                <div class="info">
                    <div class="brand">
                        &copy; My Company <?= date('Y') ?><br>
                        All Rights Reserved
                    </div>
                    <div class="social-networks">
                        <a href="" class="social-network">
                            <i class="icofont-instagram"></i>
                        </a>
                        <a href="" class="social-network">
                            <i class="icofont-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col col-xs-6 col-md-4 text-center order-3 order-md-2">
                <div class="contacts">
                    <div class="header">
                        <h4><?= Yii::t('app', 'Our Contacts') ?></h4>
                    </div>
                    <div class="general">
                        <span>м.Луцьк, Волі 14б</span>
                        <span>+380 99 787 76 78</span>
                        <a href="mailto:test@email.com">test@email.com</a>
                    </div>
                    <div class="social-networks"></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 text-right order-1 order-md-3">
                <div class="links">
                    <div class="link">
                        <a href="/donation" class="btn-custom big"><?= Yii::t('app', 'Make a donation') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
