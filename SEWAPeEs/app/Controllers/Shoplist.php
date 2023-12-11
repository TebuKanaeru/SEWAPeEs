<?php

namespace App\Controllers;

class Shoplist extends BaseController
{
    public function index()
    {
        echo view('part_oth/header');
        echo view('shoplist');
        echo view('part_oth/footer');
    }
}