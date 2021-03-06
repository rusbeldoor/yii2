<?php
$dbMain = require(__DIR__ . '/db_main-mylocal.php');
return [
    'language' => 'ru-RU',
    'timeZone' => 'Europe/Moscow',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
		'db' => $dbMain,
		'dbMain' => $dbMain,
        'mailer' => ['class' => 'yii\swiftmailer\Mailer'],
        'cache' => ['class' => 'yii\caching\FileCache'],
        'formatter' => ['class' => 'rusbeldoor\yii2General\components\Formatter'],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest', 'user'],
        ],
    ],
];
