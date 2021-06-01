<?php
return [
    'projectName' => 'Название проекта',
    'projectYear' => 2020,
    'projectVersion' => '1.001',

    'user.passwordResetTokenExpire' => 3600,

    'rusbeldoor' => [ // Поставщик rusbeldoor
        'yii2General' => [ // Репозиторий yii2General
            'platform' => [ // Модуль Platform
                'onlyMigrations' => true, // Изменение только через миграции
            ],
            'rbac' => [ // Модуль RBAC
                'onlyMigrations' => true, // Изменения только через миграции
            ],
            'cron' => [ // Модуль Cron
                'onlyMigrations' => true, // Изменения только через миграции
            ],
        ],
    ],
];
