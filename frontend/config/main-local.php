<?php

$config = [
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
           ],
        ],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ky1RlaGK1ZK0HQsW_Ma6e2noFoCE8gPM',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['modules']['gii'] = [
      'class' => 'yii\gii\Module',
      'generators' => [
         'crud' => [
         'class' => 'yii\gii\generators\crud\Generator',
            'templates' => [
            'myCRUD' => '@app/templates/crud/default'
            ]
         ]
      ]
    ];
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
