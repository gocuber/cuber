<?php

/**
 * Cube function
 *
 * @author Cube <dafei.net@gmail.com>
 */

/**
 * G
 *
 * @see Cube::G();
 */
function G($class = '')
{
	return Cube::G($class);
}

/**
 * M
 *
 * @see DB::model();
 */
function M($class = '')
{
	return DB::model($class);
}

/**
 * s()
 *
 * @param string|array $data
 * @param bool $exit
 * @return void
 */
function s($data = null, $exit = false)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    $exit and exit();
}

/**
 * d()
 *
 * @return void
 */
function d()
{
    echo '<pre>';
    debug_print_backtrace();
    echo '</pre>';
}
