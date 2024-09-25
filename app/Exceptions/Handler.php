<?php declare(strict_types=1);

namespace App\Exceptions;

use Imhotep\Framework\Exceptions\Handler as HandlerBase;

class Handler extends HandlerBase
{
    protected array $dontReport = [

    ];

    public function register(): void
    {

    }

    public function context(): array
    {
        return array_merge(parent::context(), [
            // your global data
        ]);
    }
}