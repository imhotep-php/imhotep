<?php

namespace App\Http\Middleware;

use Imhotep\Framework\Http\Middleware\CookieEncryption as CookieEncryptionBase;

class CookieEncryption extends CookieEncryptionBase
{
    protected array $except = [];
}