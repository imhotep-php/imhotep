<?php

return [
    'default' => env('FILESYSTEM_DISK', 'local'),

    'cloud' => 'yandex',

    // Allow drivers: "local", "simple_s3"

    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        'cloud' => [
            'driver' => 'simple_s3',
            'endpoint' => env('AWS_ENDPOINT'),
            'access_key' => env('AWS_ACCESS_KEY'),
            'secret_key' => env('AWS_SECRET_KEY'),
            'bucket' => env('AWS_BUCKET'),
            'region' => env('AWS_REGION'),
            'url' => env('APP_URL'),
            'throw' => false,
            //'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ]
    ],

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],
];