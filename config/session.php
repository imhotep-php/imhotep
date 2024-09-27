<?php

return [
    'driver' => env('SESSION_DRIVER', 'file'),

    'name' => 'session',

    'encrypt' => false,

    'lifetime' => env('SESSION_LIFETIME', 120), // In seconds...

    'expire_on_close' => false,

    'path' => '/',

    'domain' => env('SESSION_DOMAIN', ''),

    'secure' => true,

    'httpOnly' => true,

    'sameSite' => 'lax',

    'files' => storage_path('sessions'),

    'connection' => null,

    'table' => 'sessions',

    'store' => null,
];