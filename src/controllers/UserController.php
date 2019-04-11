<?php
namespace paw\cp\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use paw\rbac\Role;
use paw\user\models\User;
use paw\user\models\LoginForm;

class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['login'],
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    if ($action->id == 'login') return $this->redirect(['/admin']);
                    // throw new ForbiddenHttpException("You are not allowed to perform this action.");
                },
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['POST'],
                ],
            ],
        ];
    }
    
    public function actionLogin()
    {
        $model = new LoginForm(['access' => [Role::ROLE_ADMIN]]);
        
        if ($model->load(Yii::$app->request->post()) && $user = $model->submit())
        {
            Yii::$app->user->login($user);
            return $this->redirect(['/admin']);
        }

        return $this->render('login', compact('model'));
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(Yii::$app->user->loginUrl);
    }
}