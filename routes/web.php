<?php declare(strict_types=1);

use App\Http\Controllers\WelcomeController;
use Imhotep\Facades\Route;

// Call the default action if the route is missing
Route::setDefaultAction(fn() => abort(404) );

Route::get('/', WelcomeController::class);