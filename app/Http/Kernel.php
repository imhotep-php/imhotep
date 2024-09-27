<?php declare(strict_types=1);

namespace App\Http;

use App\Http\Middleware\CookieEncryption;
use Imhotep\Framework\Http\Kernel as KernelBase;
use Imhotep\Framework\Http\Middleware\AddQueuedCookiesToResponse;
use Imhotep\Session\Middleware\StartSession;

class Kernel extends KernelBase
{

    /**
     * Global middleware stack
     * @var array
     */
    protected array $middleware = [
        CookieEncryption::class,
        AddQueuedCookiesToResponse::class,
        StartSession::class
    ];

    /**
     * Global route middleware stack
     * @var string[]
     */
    protected array $routeMiddleware = [

    ];

    /**
     * Global route middleware groups
     * @var string[]
     */
    protected array $routeMiddlewareGroups = [
        'api' => [],
        'web' => [],
    ];

    /**
     * The priority-sorted list of middleware.
     * This forces non-global middleware to always be in the given order.
     *
     * @var string[]
     */
    protected array $middlewarePriority = [

    ];
}