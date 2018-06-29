<?php

/**
 * App\Controllers\Demo
 *
 * @author Cuber <dafei.net@gmail.com>
 */
namespace App\Controllers;

use Cuber\Foundation\Controller;
use App\Libs\User\Base as User_Base;

class Demo extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function welcome()
    {
        s('Welcome to Cuber !');
    }

    private function view()
    {
        s($_SERVER);
    }

    public function libs()
    {
        s((new User_Base())->get());
    }

}
