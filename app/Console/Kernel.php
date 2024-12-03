<?php declare(strict_types=1);

namespace App\Console;

use Imhotep\Console\Application as Console;
use Imhotep\Framework\Console\Kernel as KernelBase;

class Kernel extends KernelBase
{
    protected function commands(): void
    {
        $this->loadCommands(app_path('Console/Commands'));

        Console::starting(function () {
            require base_path('routes/console.php');
        });
    }
}