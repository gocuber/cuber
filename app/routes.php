<?php

/**
 * Route
 *
 * @author Cube <dafei.net@gmail.com>
 */

Route::get('welcome/{name}', function($name = 'Cuber'){
	echo 'Hello ' . $name;
}, ['name'=>'|[a-z]+']);

Route::get('demo', 'Demo@welcome');

Route::get('user/{id}', 'Ucenter\User@info?id={id}');

Route::get('user/{name}', 'Ucenter\User@hello?name={name}');

Route::wildcard(['id'=>'[0-9]+', 'name'=>'[a-z]+', 'all'=>'.*']);
