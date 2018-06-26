<?php

/**
 * default
 */
namespace controllers;

class Index extends \Controller
{

    public function index()
    {
        $this->display('index', ['name'=>'Cuber']);
    }

}
