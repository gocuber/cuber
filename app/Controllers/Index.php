<?php

/**
 * App\Controllers\Index
 *
 * @author Cuber <dafei.net@gmail.com>
 */
namespace App\Controllers;

use Cuber\Foundation\Controller;

class Index extends Controller
{

    public function index()
    {
        $this->display('index', ['name'=>'Cuber']);
    }

}
