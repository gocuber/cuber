<?php

/**
 * Cuber - Create The Application
 *
 * @author Cuber <dafei.net@gmail.com>
 */
define('CUBER_START', microtime(true));

define('APP_DEBUG', true);
ini_set('display_errors', 'on');
error_reporting(-1);

date_default_timezone_set('PRC');
header("Content-type: text/html; charset=utf-8");

/**
 * Register The Auto Loader
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Run The Application
 */
(new Cuber\Foundation\Application(__DIR__ . '/../'))->run();
