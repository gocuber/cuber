<?php

/**
 * index.php
 *
 * @author Cube <dafei.net@gmail.com>
 */

	date_default_timezone_set('PRC');
	header("Content-type: text/html; charset=utf-8");

	define('APP_DIR', dirname(__DIR__) . '/app/');

	require(APP_DIR . '../cube/common/cube.php');

	Cube::run();
