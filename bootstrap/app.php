<?php

/**
 * Cuber - Create The Application
 *
 * @author Cuber <dafei.net@gmail.com>
 */
define('CUBER_START', microtime(true));

/**
 * Register The Auto Loader
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Run The Application
 */
(new Cuber\Foundation\Application(__DIR__ . '/../'))->run();
