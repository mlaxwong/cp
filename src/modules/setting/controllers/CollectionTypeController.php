<?php
namespace paw\cp\modules\setting\controllers;

use yii\web\Controller;

class CollectionTypeController extends Controller
{
    public function actionIndex()
    {
        return $this->render('list');
    }

    public function actionCreate()
    {
        return $this->render('list');
    }
}