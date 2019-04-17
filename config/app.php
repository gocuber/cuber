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

    'debug' => env('DEBUG', true),

    // controllers namespace prefix
    'controllers_namespace' => 'App\\Controllers\\',

    // models namespace prefix
    'models_namespace' => 'App\\Models\\',

    // views dir
    'views' => base_path('app/views/'),

    // aliases
    'aliases' => [
        'Route' => 'Cuber\\Support\\Facades\\Route',
        'View' => 'Cuber\\Support\\Facades\\View',
    ],

    // providers
    'providers' => [
        Cuber\Foundation\CoreServiceProvider::class,
        Cuber\Cookie\CookieServiceProvider::class,
        Cuber\Session\SessionServiceProvider::class,
        Cuber\FileCache\FileCacheServiceProvider::class,
        Cuber\Memcache\MemcacheServiceProvider::class,
        Cuber\Redis\RedisServiceProvider::class,
        App\Providers\AppServiceProvider::class,
    ],

    // 模块配置
    'module' => [
        'default' => [
            'route'       => 'app',
            'controllers' => 'App\\Controllers\\',
            'views'       => base_path('app/views/'),
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
            'dir'       => base_path('storage/filecache/default/'),  // 缓存目录
            'is_subdir' => 1,                                        // 是否自动生成子级缓存目录 默认1是 0否
        ],
        'session' => [
            'dir'       => base_path('storage/filecache/session/'),
            'is_subdir' => 1,
        ],
    ],

    // 异常
    'error_log' => base_path('storage/logs/'),

    // authcode
    'authcode' => env('AUTH_CODE', ''),

];
