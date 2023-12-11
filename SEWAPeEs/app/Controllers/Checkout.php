<?php

namespace App\Controllers;

class Checkout extends BaseController
{
    public function index()
    {
        echo view('part_oth/header');
        echo view('checkout');
        echo view('part_oth/footer');
    }
}