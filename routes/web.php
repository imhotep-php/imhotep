<?php declare(strict_types=1);

use App\Http\Controllers\WelcomeController;
use Imhotep\Facades\Route;

Route::get('/', WelcomeController::class);