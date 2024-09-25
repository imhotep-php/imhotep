<?php

declare(strict_types=1);

namespace App\Providers;

use Imhotep\Database\Events\QueryExecuted;
use Imhotep\Facades\DB;
use Imhotep\Framework\Providers\ServiceProvider;
use Imhotep\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        $language = request()->getAcceptedLanguages(['en','ru']);
        $language = (isset($language[0]) && $language[0] === 'ru') ? 'ru' : 'en';

        View::share('language', $language);
    }
}