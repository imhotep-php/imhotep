<?php

namespace App\Http\Controllers;

use Imhotep\Facades\View;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        // See language information in:
        // App/Providers/AppServiceProvider::boot()

        return View::make('welcome');
    }
}