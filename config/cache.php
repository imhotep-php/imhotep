<?php

return [
    // Support: array, file

    'default' => env('CACHE_STORE', 'file'),

    'stores' => [
        'array' => [
            'driver' => 'array',
            'ttl' => 3600
        ],
        'file' => [
            'driver' => 'file',
            'path' => storage_path('/storage/framework/cache/data'),
            'permission' => 0666,
            'dirPermission' => 0777,
            'ttl' => 3600
        ]
    ],

    'prefix' => ''
];