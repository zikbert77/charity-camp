<?php
/**
 * @var \yii\web\View $this
 */

$this->title = Yii::t('app', 'Usage Policy');
?>

<style>
    #policy {
        margin: 75px 0;
    }
</style>


<section id="policy">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="privacy">
                    <h3><?= Yii::t('app/privacy_policy', 'Privacy Policy') ?></h3>
                    <?= Yii::t('app/privacy_policy', 'This privacy policy explains how we collect, use, and protect your personal information.') ?><br><br>

                    <b><?= Yii::t('app/privacy_policy', 'Collection and Use of Information') ?></b><br>
                    <?= Yii::t('app/privacy_policy', 'We may collect various information, including personal information you provide to us when you use our website. This information is used to provide and improve our services.') ?><br><br>

                    <b><?= Yii::t('app/privacy_policy', 'Protection of Your Information') ?></b><br>
                    <?= Yii::t('app/privacy_policy', 'We take the security of your personal information seriously and take measures to protect it from unauthorized access or disclosure.') ?><br><br>

                    <b><?= Yii::t('app/privacy_policy', 'Links to Third-Party Websites') ?></b><br>
                    <?= Yii::t('app/privacy_policy', 'Our website may contain links to third-party websites that we do not control. We are not responsible for the collection or use of information by these third-party websites.') ?><br><br>

                    <b><?= Yii::t('app/privacy_policy', 'Consent to the use of personal information') ?></b><br>
                    <?= Yii::t('app/privacy_policy', 'By filling out any form, or by submitting any information on this website, I consent to the collection, processing and use of my personal information on the website <b>{siteName}</b>.', [
                        'siteName' => Yii::$app->params['siteName']
                    ]) ?><br><br>

                    <?= Yii::t('app/privacy_policy', 'I also understand and agree that my personal information may be transferred to third parties only in cases where it is necessary for the provision of services or in compliance with legal requirements.') ?>
                    <br><br>

                    <?= Yii::t('app/privacy_policy', 'This consent is granted for an indefinite period and may be revoked by me at any time by contacting the website administration.') ?>
                    <br><br>

                    <b><?= Yii::t('app/privacy_policy', 'Your consent') ?></b><br>
                    <?= Yii::t('app/privacy_policy', 'By using our website, you consent to the terms of this privacy policy.') ?><br><br>
                </div>

                <hr>
                <br>

                <div id="cookies">
                    <h3><?= Yii::t('app/cookies_policy', 'Cookie Usage Policy') ?></h3>
                    <?= Yii::t('app/cookies_policy', 'This policy outlines how we use cookies on our website.') ?><br><br>

                    <b><?= Yii::t('app/cookies_policy', 'What are cookies?') ?></b><br>
                    <?= Yii::t('app/cookies_policy', 'Cookies are small text files that are stored on your device when you visit a website. They help us understand how you interact with our website and provide information that helps us improve your user experience.') ?><br><br>

                    <b><?= Yii::t('app/cookies_policy', 'What cookies do we use?') ?></b><br>
                    <ul>
                        <li><b><?= Yii::t('app/cookies_policy', 'Essential cookies') ?>: </b><?= Yii::t('app/cookies_policy', 'These cookies are necessary for the website to function and allow you to use its features.') ?></li>
                        <li><b><?= Yii::t('app/cookies_policy', 'Analytics cookies') ?>: </b><?= Yii::t('app/cookies_policy', 'We use cookies to collect information about how you use our website to improve its functionality and make it more convenient.') ?></li>
                    </ul><br>

                    <b><?= Yii::t('app/cookies_policy', 'How can you control cookies?') ?></b><br>
                    <?= Yii::t('app/cookies_policy', 'You can control cookies by adjusting your browser settings. Please note that disabling some cookies may affect the functionality of the website and your user experience.') ?><br><br>

                    <b><?= Yii::t('app/cookies_policy', 'Your consent') ?></b><br>
                    <?= Yii::t('app/cookies_policy', 'By using our website, you consent to the use of cookies as outlined in this policy. If you have any questions about this cookie usage policy, please contact us.') ?><br><br>

                    <b><?= Yii::t('app/cookies_policy', 'Policy Updates') ?></b><br>
                    <?= Yii::t('app/cookies_policy', 'We may update this policy from time to time. Please periodically review it to stay informed of any changes.') ?>
                </div>
            </div>
        </div>
    </div>
</section>