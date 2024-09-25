<?php

return [
    'name' => 'Imhotep',

    'env' => env('APP_ENV', 'production'),

    'debug' => env('APP_DEBUG', true),

    'url' => env('APP_URL', 'http://localhost'),

    'timezone' => 'UTC',

    'locale' => 'ru',

    'fallback_locale' => 'en',

    'key' => env('APP_KEY'),

    'cipher' => 'aes-128-gcm',

    'providers' => [
        // Imhotep providers
        \Imhotep\Log\LogServiceProvider::class,
        \Imhotep\Encryption\EncryptionServiceProvider::class,
        \Imhotep\Cookie\CookieServiceProvider::class,
        \Imhotep\Filesystem\FilesystemServiceProvider::class,
        \Imhotep\Localization\LocalizationServiceProvider::class,
        \Imhotep\Cache\CacheServiceProvider::class,
        \Imhotep\Database\DatabaseServiceProvider::class,
        \Imhotep\Session\SessionServiceProvider::class,
        \Imhotep\Framework\Providers\ConsoleServiceProvider::class,
        \Imhotep\Database\MigrationServiceProvider::class,
        \Imhotep\View\ViewServiceProvider::class,
        \Imhotep\Validation\ValidationServiceProvider::class,
        \Imhotep\Auth\AuthServiceProvider::class,

        // App providers
        \App\Providers\AppServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
        \App\Providers\EventServiceProvider::class,
    ],

    'bindings' => [

    ],

    'singletons' => [

    ],

    'aliases' => [

    ]
];