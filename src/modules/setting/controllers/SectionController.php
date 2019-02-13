<?php
namespace paw\cp\modules\setting\controllers;

use yii\web\Controller;

class SectionController extends Controller
{
    public function actionIndex()
    {
        return $this->render('list');
    }

    public function actionCreate()
    {
        return $this->render('form');
    }
}