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
                'class' => 'rusbeldoor\yii2General\common\gii\crud\Generator',
                'templates' => ['default' => '@vendor/quick-service/yii2/common/gii/crud/default'],
            ],
            'model' => [
                'class' => 'rusbeldoor\yii2General\common\gii\model\Generator',
                'templates' => ['default' => '@vendor/quick-service/yii2/common/gii/model/default'],
            ],
        ],
    ];
}

return $config;
