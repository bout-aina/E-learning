<?php

 return [

    

    'default' => env('MAIL_MAILER', 'smtp'),

   

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'mail@engyno.com'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('_mainaccount@engyno.com'),
            'password' => env('engyno2020'),
            'timeout' => null,
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'gmail' => [
            'transport' => 'gmail',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => '/usr/sbin/sendmail -bs',
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],
    ],

    

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', '_mainaccount@engyno.com'),
        'name' => env('MAIL_FROM_NAME', 'EnGyno'),
    ],

    

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
 