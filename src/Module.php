<?php
namespace paw\cp;

use paw\rbac\Role;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\ErrorHandler;

class Module extends \paw\cp\base\Module
{
    public $layout = 'cp.twig';

    public $allowedRoles = [Role::ROLE_ADMIN];

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => $this->allowedRoles,
                    ],
                    [
                        'allow' => true,
                        'roles' => ['?'],
                        'controllers' => ['admin/user'],
                        'actions' => ['login'],
                    ],
                ],
            ],
        ];
    }

    public function init()
    {
        parent::init();

        Yii::setAlias('@pawcp_root', dirname(__DIR__));
        Yii::setAlias('@pawcp_base', __DIR__);

        Yii::configure($this, [
            'components' => [
                'errorHandler' => [
                    'class' => ErrorHandler::className(),
                    'errorAction' => 'admin/default/error',
                ],
            ],
        ]);

        $handler = $this->get('errorHandler');
        Yii::$app->set('errorHandler', $handler);
        $handler->register();

        $this->modules = ArrayHelper::merge($this->getBuildInModule(), $this->modules);
    }

    protected function getBuildInModule()
    {
        return [
            'setting' => ['class' => \paw\cp\modules\setting\Module::class],
        ];
    }
}
