<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

$imgList = [
        '/img/childrens6.jpg',
        '/img/childrens6.jpg',
        '/img/childrens6.jpg',
        '/img/childrens6.jpg',
        '/img/childrens6.jpg',
        '/img/childrens6.jpg',
        '/img/childrens6.jpg',
        '/img/childrens6.jpg',
        '/img/childrens6.jpg',
        '/img/childrens6.jpg',
        '/img/childrens6.jpg',
        '/img/childrens6.jpg',
];
?>

<section id="head" style="background-image: url('../img/childrens6.jpg')">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-lg-6">
                <div class="head-text-wrapper shadow">
                    <h1 class="text-center roboto-black">Working together to stop the war in Ukraine</h1>
                    <div class="text-center">
                        We are worldwide ministry in which millions of children reap the benefits of man's clear.
                        Bringing people together to end poverty for good. <br><br><br>
                        <a href="/donate" class="btn-custom big">Donate now</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6"></div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-6">
                <div class="about-img">
                    <img src="img/24.png" class="shadow" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-lg-6">
                <div class="text-center">
                   <h2 class="roboto-black">Camp Title</h2><br>
                </div>
                <p class="description">
                    Звітливий дитячий сміх і щасливі очі - ось що робить нашу місію так важливою.
                    Ми - команда, яка зобов'язана забезпечити безпечне та комфортне перевезення дітей з
                    прифронтових територій до місць, де вони можуть знайти тимчасовий притулок, медичну допомогу або сімейні обійми.
                    <br><br>
                    Тут ви знайдете інформацію про нашу діяльність, наші цінності та те, як саме ми допомагаємо дітям та їх сім'ям.
                    Ми робимо все можливе, щоб забезпечити безпеку та підтримку в цей важливий час їхнього життя. <br><br>
                    Приєднуйтесь до нашої місії - разом ми можемо зробити більше.
                    Допоможіть нам створити краще майбутнє для дітей з прифронтових територій.
                </p>
            </div>
        </div>
    </div>
</section>


<section id="invitation">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-6">
                <div class="flex-wrapper">
                    <div class="text">
                        <div class="text-center">
                            <h2 class="roboto-black">Your donations will help us save more innocent lives!</h2>
                        </div>
                        <br>
                        <p class="description">
                            Ваші пожертви дозволять нам забезпечити необхідну медичну допомогу,
                            комфортне переселення та підтримку для дітей та їхніх родин.
                            Кожен ваш внесок - це крок до створення безпечного майбутнього для тих, хто його потребує найбільше.
                            <br><br>
                            Подаруйте дітям посмішку, даруючи нам можливість зробити більше.
                            Ваша допомога - це краплина добра, яка перетворюється на безмежний океан надії.
                            <br><br>
                            Пожертвуйте сьогодні та долучайтеся до нашої надзвичайної місії! 🌈🤝
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6">
                <div class="donation-img">
                    <a href="/donation">
                        <img src="/img/donation_small.jpg" alt="" style="max-width: 100%">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="donation">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <div class="text-center">
                    <h2 class="roboto-black">Choose your option to become part of our mission</h2>
                </div>
                <div class="donation-methods roboto-light clearfix">
                    <div class="donation-method hover-shadow">
                        <a href="">
                            <img src="/img/donation-methods/cc.png" alt="Credit Card" title="Credit Card">
                            <span>Credit Card</span>
                        </a>
                    </div>
                    <div class="donation-method hover-shadow">
                        <a href="">
                            <img src="/img/donation-methods/paypal-logo.jpeg" alt="PayPal" title="PayPal">
                            <span>PayPal</span>
                        </a>
                    </div>
                    <div class="donation-method hover-shadow">
                        <a href="">
                            <img src="/img/donation-methods/monobank.jpeg" alt="Monobank" title="Monobank">
                            <span>Monobank</span>
                        </a>
                    </div>
                    <div class="donation-method hover-shadow">
                        <a href="">
                            <img src="/img/donation-methods/Bitcoin.svg" alt="Monobank" title="Crypto">
                            <span>Crypto</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="gallery">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <h2 class="roboto-black text-center">Фотогалерея</h2>
                <div class="gallery-box">
                    <div class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($imgList as $img): ?>
                                    <li class="splide__slide" data-fancybox="gallery" data-src="<?= $img ?>">
                                        <img src="<?= $img ?>" loading="lazy" alt="Галерея | Title" title="Галерея | Title">
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--https://themeforest.net/item/saveelife-nonprofit-charity-website-figma-template/screenshots/36454802?index=4-->
<!--https://help-ukraine.org.ua/en/-->
