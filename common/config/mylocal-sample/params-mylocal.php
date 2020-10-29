<?php
return [
    'masterPassword' => '12345678',

    'mailFrom' => 'noreply@yii2.local',
    'mailFromName' => 'Название проекта',

    'rusbeldoor' => [ // Поставщик rusbeldoor
        'yii2General' => [ // Репозиторий yii2General
            'subscriptions' => [ // Модуль Subscriptions
                'salt' => '12345678', // Соль для хэша
            ],
            'reCaptcha' => [
                'secretKey' => '6LcV5NwZAAAAALXpvTgqWEs1g-6unMvx63-r6k6V',
                'siteKey' => '6LcV5NwZAAAAAFUTeVmZd6WHVszbmqZ7iWm-TMvS',
            ],
        ],
    ],
];