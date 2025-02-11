<?php
/**
 * @var \yii\web\View $this
 */

$this->title = 'Donation - Cryptocurrency';
?>

<section id="donation-methods">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <h1 class="roboto-black">Donate with Crypto</h1>
                <h2 class="roboto-light">Empower Children's Futures and Make a Difference Today</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="donation-method shadow">
                    <div class="logo">
                        <img src="/img/donation-methods/eth.png" alt="">
                    </div>
                    <div class="title">
                        ETH
                    </div>
                    <div class="wallet">
                        <span class="link">0x8cDa69814C54BEcF3633EcB5f5352d31fA497aDd</span>
                        <span class="action-copy-wallet-address" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-custom-class="custom-tooltip"
                              data-bs-title="Copy wallet address">
                            <i class="icofont-duotone icofont-duplicate-alt"></i>
                        </span>
                    </div>
                    <div class="note">
                        <i class="icofont-duotone icofont-info-circle"></i> <?= Yii::t('app', 'To this address, you can only send {type} assets.<br>Other assets will be lost forever.', [
                            'type' => 'Ethereum (ETH)'
                        ]) ?>
                    </div>
                    <div class="qr-code">
                        <img src="/img/donation-methods/qr-eth.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="donation-method shadow">
                    <div class="logo">
                        <img src="/img/donation-methods/ftm.png" alt="">
                    </div>
                    <div class="title">
                        FTM
                    </div>
                    <div class="wallet">
                        <span class="link">0x030f3BAd9c445C962FcD8C8eA112366Eb6eF379a</span>
                        <span class="action-copy-wallet-address" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-custom-class="custom-tooltip"
                              data-bs-title="Copy wallet address">
                            <i class="icofont-duotone icofont-duplicate-alt"></i>
                        </span>
                    </div>
                    <div class="note">
                        <i class="icofont-duotone icofont-info-circle"></i> <?= Yii::t('app', 'To this address, you can only send {type} assets.<br>Other assets will be lost forever.', [
                            'type' => 'Fantom (FTM)'
                        ]) ?>
                    </div>
                    <div class="qr-code">
                        <img src="/img/donation-methods/qr.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="donation-method shadow">
                    <div class="logo">
                        <img src="/img/donation-methods/avax.png" alt="">
                    </div>
                    <div class="title">
                        AVAX
                    </div>
                    <div class="wallet">
                        <span class="link">0x8cDa69814C54BEcF3633EcB5f5352d31fA497aDd</span>
                        <span class="action-copy-wallet-address" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-custom-class="custom-tooltip"
                              data-bs-title="Copy wallet address">
                            <i class="icofont-duotone icofont-duplicate-alt"></i>
                        </span>
                    </div>
                    <div class="note">
                        <i class="icofont-duotone icofont-info-circle"></i> <?= Yii::t('app', 'To this address, you can only send {type} assets.<br>Other assets will be lost forever.', [
                            'type' => 'Avalanche C-Chain (AVAX)'
                        ]) ?>
                    </div>
                    <div class="qr-code">
                        <img src="/img/donation-methods/qr-avax.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="donation-method shadow">
                    <div class="logo">
                        <img src="/img/donation-methods/xrp.png" alt="">
                    </div>
                    <div class="title">
                        XRP
                    </div>
                    <div class="wallet">
                        <span class="link">rUbQpHNhC2WJWFupkTdrntDT9GqtVZwaWy</span>
                        <span class="action-copy-wallet-address" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-custom-class="custom-tooltip"
                              data-bs-title="Copy wallet address">
                            <i class="icofont-duotone icofont-duplicate-alt"></i>
                        </span>
                    </div>
                    <div class="note">
                        <i class="icofont-duotone icofont-info-circle"></i> <?= Yii::t('app', 'To this address, you can only send {type} assets.<br>Other assets will be lost forever.', [
                            'type' => 'XRP (XRP)'
                        ]) ?>
                    </div>
                    <div class="qr-code">
                        <img src="/img/donation-methods/qr-xrp.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>