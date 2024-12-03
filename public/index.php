<?php declare(strict_types=1);

use Imhotep\Http\Request;

define('IMHOTEP_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../app/helpers.php';

$app = require_once(__DIR__.'/../app/app.php');

$app->handleRequest(Request::createFromGlobals());
