<?php 
return [
    'aliases' => [
        '@paw/user'   => '@vendor/mlaxwong/paw-user/src',
    ],
    'components' => [
        'user' => [
            'class' => paw\user\services\User::class,
            'identityClass' => paw\user\models\User::class,
            'on afterLogin' => [paw\user\events\AfterLoginEvent::class, 'handleLoginTrack']
        ],
        'resource' => [
            'namespaces' => [
                'paw\\user\\resources'
            ],
        ]
    ]
];