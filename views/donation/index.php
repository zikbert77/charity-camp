<?php
/**
 * @var \yii\web\View $this
 */

$this->title = 'Donation';
?>

<style>
    html, body {
        min-height: 100%;
    }

    body {
        position: relative;
    }

    footer {
        position: absolute;
        width: 100%;
        bottom: 0;
    }
</style>

<section id="donation-methods">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <h1 class="roboto-black">Donate in different ways</h1>
                <h2 class="roboto-light">Choose Your Preferred Donation Method</h2>
            </div>
        </div>
        <div class="row">
            <div class="donation-methods-wrapper shadow">
                <div class="col-12">
                    <a href="<?= \yii\helpers\Url::to('donation/cc') ?>">
                        <div class="donation-method-row">
                            <div class="logo">
                                <img src="/img/donation-methods/cc.png" alt="">
                            </div>
                            <div class="title roboto-medium">
                                Credit Card
                            </div>
                            <div class="arrow">
                                <i class="icofont-rounded-right"></i>
                            </div>
                        </div>
                    </a>
                    <hr>
                </div>
                <div class="col-12">
                    <a href="<?= \yii\helpers\Url::to('donation/cryptocurrency') ?>">
                        <div class="donation-method-row">
                            <div class="logo">
                                <img src="/img/donation-methods/Bitcoin.svg" alt="">
                            </div>
                            <div class="title roboto-medium">
                                Cryptocurrency
                            </div>
                            <div class="arrow">
                                <i class="icofont-rounded-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>