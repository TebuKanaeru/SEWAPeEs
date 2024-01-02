<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        echo view('part_login/header');
        echo view('login'); 
    }
}
