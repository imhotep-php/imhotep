<?php declare(strict_types=1);

use Imhotep\Contracts\Http\Kernel;
use Imhotep\Http\Request;

define('IMHOTEP_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../app/helpers.php';

$app = require_once(__DIR__.'/../app/app.php');

$kernel = $app->make(Kernel::class);

$response = ($kernel->handle(
  $request = Request::createFromGlobals()
))->send();

$kernel->terminate($request, $response);
