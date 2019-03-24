<?php 
return [
    'controllerMap' => [
        'migrate' => [
            'class' => paw\commands\MigrateController::class,
            'templateFile' => '@paw/db/views/migration-db.php',
            'migrationNamespaces' => [
                'paw\user\migrations\db',
                'paw\storage\migrations\db',
            ],
        ],
        'rbac-migrate' => [
            'class' => paw\commands\MigrateController::class,
            'templateFile' => '@paw/db/views/migration-rbac.php',
            'migrationNamespaces' => [
                'paw\user\migrations\rbac',
                'paw\storage\migrations\rbac',
            ],
        ],
    ],
];