<?php

/**
 * config
 *
 * @author Cuber <dafei.net@gmail.com>
 */

return [

    'name' => 'Cuber',

    'timezone' => 'PRC',

    'charset' => 'utf-8',

    'app_debug' => true,

    // alias

    'alias' => [
        'Route' => 'Cuber\\Foundation\\Route',
        'View' => 'Cuber\\Foundation\\View',
    ],

    // 数据库配置

    'db' => [
        'default' => [
            'host'     => '127.0.0.1',
            'port'     => '3306',
            'username' => 'root',
            'password' => '123456',
            'database' => 'db_cuber',
            'charset'  => 'utf8mb4',
            'driver'   => 'mysql',
            'slave'    => [], // slave1 slave2 slave3 slave4 ...
        ],
    ],

    'error_log' => BASE_PATH . 'storage/logs/',

];
