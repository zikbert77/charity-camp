<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="site-about">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    This is the About page. You may modify the following file to customize its content:
                </p>
            </div>
        </div>
    </div>
</div>
