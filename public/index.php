<?php

/**
 * index.php
 *
 * @author Cuber <dafei.net@gmail.com>
 */

define('CUBER_START', microtime(true));
define('APP_DEBUG', true);
ini_set('display_errors','on');
error_reporting(-1);

date_default_timezone_set('PRC');
header("Content-type: text/html; charset=utf-8");

require __DIR__.'/../vendor/autoload.php';

(new Cuber\Foundation\Application(__DIR__.'/../'))->run();
