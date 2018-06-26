<?php

/**
 * cli.php
 *
 * @author Cube <dafei.net@gmail.com>
 */

	date_default_timezone_set('PRC');
	header("Content-type: text/html; charset=utf-8");

	define('APP_DIR', __DIR__ . '/');
	define('IS_CLI', true);

	require(APP_DIR . '../cube/common/cube.php');

	Cube::run();
