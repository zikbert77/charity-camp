<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body class="roboto-regular">
<?php $this->beginBody() ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto">
                    <a class="nav-item nav-link" href="#">About</a>
                </div>
                <a class="nav-item nav-link btn-custom" href="#">Make a Donation</a>
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
            <div class="col-md-4 text-center text-md-start">
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
            <div class="col-md-4 text-center text-md-end">
                <div class="contacts">
                    <div class="header">
                        <h4>Our Contacts</h4>
                    </div>
                    <div class="general">
                        <span>м.Луцьк, Волі 14б</span>
                        <span>+380 99 787 76 78</span>
                        <span>test@email.com</span>
                    </div>
                    <div class="social-networks"></div>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <div class="links">
                    <div class="link">
                        <a href="" class="btn-custom big">Make a donation</a>
                    </div>
                    <div class="link">
                        <a href="">About</a>
                    </div>
                    <div class="link">
                        <a href="">Privacy</a>
                    </div>
                    <div class="link">
                        <a href="">Terms And Conditions</a>
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
