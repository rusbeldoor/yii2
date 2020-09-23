<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
            'crud' => [
                'class' => 'rusbeldoor\yii2General\gii\crud\Generator',
                'templates' => ['default' => '@vendor/rusbeldoor/yii2-general/gii/crud/default'],
            ],
            'model' => [
                'class' => 'rusbeldoor\yii2General\gii\model\Generator',
                'templates' => ['default' => '@vendor/rusbeldoor/yii2-general/gii/model/default'],
            ],
            'module' => [
                'class' => 'rusbeldoor\yii2General\gii\module\Generator',
                'templates' => ['default' => '@vendor/rusbeldoor/yii2-general/gii/module/default'],
            ],
        ],
    ];
}

return $config;
