<?php

/**
 * config
 *
 * @author Cuber <dafei.net@gmail.com>
 */

$db_default_slave = [];
if (!empty(env('DB_DEFAULT_SLAVE'))) {
    $slave = explode(',', env('DB_DEFAULT_SLAVE', ''));
    foreach ($slave as $value) {
        $v = explode(':', $value);
        $db_default_slave[] = ['host'=>$v[0], 'port'=>isset($v[1])?$v[1]:3306];
    }
}

return [

    'name' => 'Cuber',

    'timezone' => 'PRC',

    'charset' => 'utf-8',

    'debug' => env('DEBUG', false),

    // controllers namespace prefix
    'controllers_namespace' => 'App\\Controllers\\',

    // models namespace prefix
    'models_namespace' => 'App\\Models\\',

    // views dir
    'views' => BASE_PATH . 'app/views/',

    // alias
    'alias' => [
        'Route' => 'Cuber\\Foundation\\Route',
        'View'  => 'Cuber\\Foundation\\View',
    ],

    // 模块配置
    'module' => [
        'default' => [
            'route'       => 'app',
            'controllers' => 'App\\Controllers\\',
        ],
        'cli' => [
            'route'       => 'cli',
            'controllers' => 'App\\Cli\\',
        ],
    ],

    // cookie配置
    'cookie' => [
        'prefix' => null,  // cookie 前缀
        'domain' => null,  // cookie 域
    ],

    // session配置
    'session' => [
        'driver'  => env('SESSION_DRIVER', 'file'),
        'connect' => 'session',
        'prefix'  => '',
        'cookie'  => null,    // session_id cookie key
        'time'    => null,
    ],

    // Mysql数据库配置
    'db' => [
        'default' => [
            'host'     => env('DB_DEFAULT_HOST', '127.0.0.1'),
            'port'     => env('DB_DEFAULT_PORT', 3306),
            'username' => env('DB_DEFAULT_USERNAME', ''),
            'password' => env('DB_DEFAULT_PASSWORD', ''),
            'database' => env('DB_DEFAULT_DATABASE', ''),
            'charset'  => 'utf8mb4',
            'driver'   => 'mysql',
            'slave'    => $db_default_slave,
        ],
    ],

    // Memcache配置
    'memcache' => [
        'default' => [
            'host' => env('MEM_DEFAULT_HOST', '127.0.0.1'),
            'port' => env('MEM_DEFAULT_PORT', 11211),
        ],
    ],

    // Redis配置
    'is_redis' => env('IS_REDIS', false),
    'redis' => [
        'default' => [
            'host'  => env('REDIS_DEFAULT_HOST', '127.0.0.1'),
            'port'  => env('REDIS_DEFAULT_PORT', 6379),
            'auth'  => env('REDIS_DEFAULT_AUTH', ''),
            'slave' => [],
        ],
    ],

    // FileCache配置
    'filecache' => [
        'default' => [
            'default'   => BASE_PATH . 'storage/filecache/default/',  // 缓存目录
            'is_subdir' => 1,                                         // 是否自动生成子级缓存目录 默认1是 0否
        ],
        'session' => [
            'dir'       => BASE_PATH . 'storage/filecache/session/',
            'is_subdir' => 1,
        ],
    ],

    // 异常
    'error_log' => BASE_PATH . 'storage/logs/',

    // authcode
    'authcode' => env('AUTH_CODE', ''),

    // rsa
    'rsa' => [
        'dir'  => BASE_PATH . 'storage/rsa/',
        'num'  => 200,
        'code' => env('RSA_CODE', ''),
    ],

];
