<?php

/**
 * App\Controllers\Ucenter\User
 *
 * @author Cuber <dafei.net@gmail.com>
 */
namespace App\Controllers\Ucenter;

use Cuber\Foundation\Controller;

class User extends Controller
{

    /**
     * Route::get('user/{id}', 'Ucenter\User@info');
     *
     * @return void
     */
    public function info()
    {
        s($_GET);
    }

    /**
     * Route::get('user/{name}', 'Ucenter\User@hello');
     *
     * @return void
     */
    public function hello()
    {
        s($_GET);
    }

}
