<?php

namespace app\controllers;

use yii\web\Controller;

class DonationController extends BaseController
{
    public $defaultAction = 'cryptocurrency';

    public function actionCryptocurrency(): string
    {
        return $this->render('cryptocurrency');
    }
}