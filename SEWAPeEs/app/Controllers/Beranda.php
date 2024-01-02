<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        echo view('part/header');
        echo view('part/topbar');
        echo view('beranda'); // Mengirim data produk ke view 'beranda'
        echo view('part/footer');
    }
}
