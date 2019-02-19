<?php
namespace paw\cp\modules\setting\controllers;

use yii\web\Controller;
use paw\models\CollectionField;

class CollectionFieldController extends Controller
{
    public function actionIndex()
    {
        return $this->render('list');
    }

    public function actionCreate()
    {
        return $this->renderForm(new CollectionField);
    }
    
    public function actionUpdate($id)
    {
        return $this->renderForm(CollectionField::findOne($id));
    }

    protected function renderForm($model)
    {
        return $this->render('form', ['model' => $model]);
    }
}