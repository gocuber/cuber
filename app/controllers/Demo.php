<?php

/**
 * 演示
 */
namespace controllers;

use libs\User_List;
use libs\User\Base as User_Base;

class Demo extends \Controller
{

    public function __construct($opt = [])
    {
        parent::__construct($opt);
    }

    public function welcome()
    {
        s('Welcome to CubePHP !');
    }

    private function view()
    {
        s(time());
    }

    public function libs()
    {
        s((new User_List())->get());
        s((new User_Base())->get());
    }

}
