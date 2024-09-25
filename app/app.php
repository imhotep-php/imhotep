<?php declare(strict_types=1);

$app = new Imhotep\Framework\Application($_ENV['APP_BASE_PATH'] ?? dirname(__DIR__));

$app->singleton(
    Imhotep\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Imhotep\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Imhotep\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

return $app;