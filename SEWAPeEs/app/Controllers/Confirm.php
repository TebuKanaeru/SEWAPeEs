<?php

namespace App\Controllers;

class Confirm extends BaseController
{
    public function index()
    {
        echo view('part_cf/header');
        echo view('confirm');
        echo view('part_cf/footer');
    }
}