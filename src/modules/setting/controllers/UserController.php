<?php
namespace paw\cp\modules\setting\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use paw\rbac\Role;
use paw\user\models\User;
use paw\user\models\RegisterForm;
use paw\user\models\ManageForm;

class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('list');
    }

    public function actionCreate()
    {
        return $this->renderForm(new RegisterForm(['roles' => [\paw\rbac\Role::ROLE_ADMIN]]), true);
    }

    public function actionUpdate($id)
    {
        $model = User::findOne($id);
        return $this->renderForm(new ManageForm(compact('model')));
    }

    public function actionDelete($id)
    {
        $model = User::findOne($id);
        if ($model)
        {
            $username = $model->username;
            Yii::$app->session->setFlash('success', Yii::t('app', 'User \'{username}\' deleted', ['username' => $username]));
            $model->delete();
        }
        return $this->redirect(Yii::$app->request->referrer);
    }

    protected function renderForm($model, $isCreate = false)
    {
        if ($model->load(Yii::$app->request->post()) && $user = $model->submit())
        {
            Yii::$app->session->setFlash('success', Yii::t('app', 'User \'{username}\' saved', ['username' => $model->username]));
            return $this->redirect(['update', 'id' => $user->id]);
        }
        return $this->render('form', compact('model', 'isCreate'));
    }
}