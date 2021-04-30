<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=leadius',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'viewPath' => '@frontend/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.ipage.com',
                'username' => 'admin@leadius.org',
                'password' => '!Leads.$$$2020',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
    ],
];
