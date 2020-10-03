<?php
return [
    'projectName' => 'Название проекта',
    'projectYear' => 2020,
    'projectVersion' => '1.001',

    'user.passwordResetTokenExpire' => 3600,

    'rusbeldoor' => [ // Поставщик rusbeldoor
        'yii2General' => [ // Репозиторий yii2General
            'rbac' => [ // Модуль RBAC
                'onlyMigrations' => true, // Изменения только через миграции
            ],
            'cron' => [ // Модуль Cron
            ],
        ],
    ],
];
