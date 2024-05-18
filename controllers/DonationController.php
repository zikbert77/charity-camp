<?php

namespace app\controllers;

use yii\web\Controller;

class DonationController extends BaseController
{
    public $defaultAction = 'index';

    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function actionCryptocurrency(): string
    {
        return $this->render('cryptocurrency');
    }
}