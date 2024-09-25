<?php declare(strict_types=1);

namespace App\Console;

use Imhotep\Framework\Console\Kernel as KernelBase;

class Kernel extends KernelBase
{
    public function commands(): void
    {
        $this->loadCommands(app_path('Console/Commands'));
    }
}