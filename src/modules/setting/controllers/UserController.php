<?php
namespace paw\cp\modules\setting\controllers;

use yii\web\Controller;
use paw\models\User;

class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render('list');
    }
    

    public function actionCreate()
    {
        return $this->renderForm(new User);
    }

    public function actionUpdate($id)
    {
        return $this->renderForm(User::findOne($id));
    }

    public function actionDelete()
    {

    }

    protected function renderForm($model)
    {
        return $this->render('form');
    }
}