<?php

/**
 * Ucenter\User
 */
namespace controllers\Ucenter;

class User extends \Controller
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
