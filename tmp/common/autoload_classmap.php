<?php

/**
 * Cube autoload_classmap
 *
 * @author Cube <dafei.net@gmail.com>
 */

$cube_dir = dirname(__DIR__);

return [
    'Cube' => $cube_dir . '/core/Cube.php',
    'Controller' => $cube_dir . '/core/Controller.php',
    'Route' => $cube_dir . '/core/Route.php',
    'Module' => $cube_dir . '/core/Module.php',
    'View' => $cube_dir . '/core/View.php',
    'Url' => $cube_dir . '/core/Url.php',
    'Session' => $cube_dir . '/core/Session.php',
    'Cookie' => $cube_dir . '/core/Cookie.php',
    'Model' => $cube_dir . '/core/DB/Model.php',
    'DB' => $cube_dir . '/core/DB/DB.php',
    'DB_PDO' => $cube_dir . '/core/DB/PDO.php',
    'DB_QueryBuilder' => $cube_dir . '/core/DB/QueryBuilder.php',
    'Cache_Mem' => $cube_dir . '/core/Cache/Mem.php',
    'Cache_Memcache' => $cube_dir . '/core/Cache/Memcache.php',
    'Cache_Memcached' => $cube_dir . '/core/Cache/Memcached.php',
    'Cache_Redis' => $cube_dir . '/core/Cache/Redis.php',
    'Cache_Session' => $cube_dir . '/core/Cache/Session.php',
    'Cache_File' => $cube_dir . '/core/Cache/File.php',
    'Util_App' => $cube_dir . '/core/Util/App.php',
    'Util_Ob' => $cube_dir . '/core/Util/Ob.php',
    'Util_AuthCode' => $cube_dir . '/core/Util/AuthCode.php',
    'Util_Email' => $cube_dir . '/core/Util/Email.php',
    'Util_Curl' => $cube_dir . '/core/Util/Curl.php',
    'Util_Log' => $cube_dir . '/core/Util/Log.php',
    'Util_Rsa' => $cube_dir . '/core/Util/Rsa.php',
    'CubeException' => $cube_dir . '/core/CubeException.php',
];
