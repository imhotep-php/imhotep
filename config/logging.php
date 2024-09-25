<?php

return [

    'default' => env('LOG_CHANNEL', 'single'),

    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'deprecations'),
        'trace' => false,
    ],

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'name' => 'channel-name',
            'channels' => ['single','telegram'],
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/imhotep.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'telegram' => [
            'driver' => 'telegram',
            'token' => env('LOG_TELEGRAM_TOKEN', ''),
            'chat_id' => env('LOG_TELEGRAM_CHAT_ID', ''),
            'level' => env('LOG_LEVEL', 'debug'),
            'parse_mode' => 'HTML',
            'disable_web_page_preview' => true
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/imhotep.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => 14,
        ],

        'deprecations' => [
            'driver' => 'single',
            'path' => storage_path('logs/deprecations.log'),
        ],
    ]
];