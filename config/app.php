<?php

/**
 * config
 *
 * @author Cuber <dafei.net@gmail.com>
 */

$_G = [];

// 数据库配置

$_G['db']['default'] = [
    'host'     => '127.0.0.1',
    'port'     => 3306,
	'username' => 'root',
	'password' => '',
	'database' => 'db_cube',
	'charset'  => 'utf8',
	'driver'   => 'mysql',
    'slave'    => [
        ['host' => 'slave1', 'port' => 3306],  // slave1
        ['host' => 'slave2', 'port' => 3306],  // slave2 slave3 slave4 ...
    ],
];
