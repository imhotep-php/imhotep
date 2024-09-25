<?php

return [
    'driver' => env('SESSION_DRIVER', 'file'),

    'name' => 'session',

    'encrypt' => false,

    'lifetime' => env('SESSION_LIFETIME', 120), // sec

    'expire_on_close' => false,

    'path' => '/',

    'domain' => env('SESSION_DOMAIN', ''),

    'secure' => true,

    'httpOnly' => true,

    'sameSite' => 'lax',

    'drivers' => [
        'array' => [],

        'cookie' => [],

        'file' => [
            'path' => storage_path('sessions'),
        ],

        'database' => [
            'connection' => null, // 'null' is default connection
            'table' => 'sessions',
        ],

        'cache' => [
            'store' => null, // 'null' is default cache store
        ]
    ],
];