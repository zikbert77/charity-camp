<?php

namespace app\controllers;

use app\components\Language;
use Yii;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
class BaseController extends Controller
{
    /**
     * @throws BadRequestHttpException
     */
    public function beforeAction($action)
    {
        Yii::$app->language = Language::getSelected();
        return parent::beforeAction($action);
    }
}