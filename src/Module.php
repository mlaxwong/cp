<?php
namespace paw\cp;

use Yii;
use yii\filters\AccessControl;
use paw\rbac\Role;

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
                    ]
                ],
            ],
        ];
    }
    
    public function init()
    {
        parent::init();

        Yii::setAlias('@pawcp_root', dirname(__DIR__));
        Yii::setAlias('@pawcp_base', __DIR__);

        $this->modules = [
            'setting' => ['class' => \paw\cp\modules\setting\Module::class],
        ];
    }
}