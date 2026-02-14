<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__ . '/../repositories/sbksasirangan/storage/framework/maintenance.php')) {
	require $maintenance;
}

require __DIR__ . '/../repositories/sbksasirangan/vendor/autoload.php';

$app = require_once __DIR__ . '/../repositories/sbksasirangan/bootstrap/app.php';

$app->handleRequest(Request::capture());
