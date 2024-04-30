<?php
/**
 * @var \yii\web\View $this
 */

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

<style>
    .splide__slide img {
        width: 300px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col col-12">
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($imgList as $img): ?>
                            <li class="splide__slide">
                                <img src="<?= $img ?>" alt="">
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>