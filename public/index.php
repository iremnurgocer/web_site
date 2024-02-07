<?php
require_once '../src/routes/routes.php';

// URL'den path'i al
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route'ları işle
Route::run($path);
echo "iremmm";die;