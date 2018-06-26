<?php

/**
 * Cube bootstrap
 *
 * @author Cube <dafei.net@gmail.com>
 */
defined('APP_DIR') or define('APP_DIR', dirname(dirname(__DIR__)) . '/app/');
define('IN_CUBE', true);
define('CUBE_DIR', dirname(__DIR__) . '/');

require (CUBE_DIR . 'common/function.php');
require (CUBE_DIR . 'core/ClassLoader.php');
require (APP_DIR . 'config.php');

ClassLoader::init(); // autoload

defined('IS_CLI') or define('IS_CLI', Util_App::isCli());
require (APP_DIR . 'routes.php');
