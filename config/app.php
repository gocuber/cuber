<?php

/**
 * config
 *
 * @author Cuber <dafei.net@gmail.com>
 */

return [

    // 数据库配置

    'db' => [
        'default' => [
            'host'     => env('DB_HOST', '127.0.0.1'),
            'port'     => env('DB_PORT', '3306'),
        	'username' => env('DB_USERNAME', 'root'),
        	'password' => env('DB_PASSWORD', '123456'),
        	'database' => env('DB_DATABASE', 'db_cuber'),
        	'charset'  => 'utf8mb4',
        	'driver'   => 'mysql',
            'slave'    => [], // slave1 slave2 slave3 slave4 ...
        ],
    ],

];
