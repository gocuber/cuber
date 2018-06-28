<?php

/**
 * default
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
