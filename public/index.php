<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Cek mode maintenance (jalur diarahkan ke folder repository)
if (file_exists($maintenance = __DIR__ . '/../sbksasirangan/storage/framework/maintenance.php')) {
	require $maintenance;
}

// 2. Register the Composer autoloader (diarahkan ke folder repository)
require __DIR__ . '/../sbksasirangan/vendor/autoload.php';

// 3. Bootstrap Laravel (diarahkan ke folder repository)
/** @var Application $app */
$app = require_once __DIR__ . '/../sbksasirangan/bootstrap/app.php';

$app->handleRequest(Request::capture());
