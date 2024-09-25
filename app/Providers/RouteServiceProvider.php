<?php declare(strict_types=1);

namespace App\Providers;

use Imhotep\Framework\Providers\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $routesPath = base_path('/routes');

        if (file_exists($routesPath.'/api.php')) {
            require $routesPath.'/api.php';
        }

        if (file_exists($routesPath.'/web.php')) {
            require $routesPath.'/web.php';
        }
    }
}