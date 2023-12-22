<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Beranda extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['produk'] = $model->findAll(); // Mengambil semua data produk

        echo view('part/header');
        echo view('part/topbar');
        echo view('beranda', $data); // Mengirim data produk ke view 'beranda'
        echo view('part/footer');
    }
}
