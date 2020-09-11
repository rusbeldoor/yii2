<?php
$dbMain = require(__DIR__ . '/db_main-mylocal.php');
return [
    'language' => 'ru-RU',
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
    ],
];
