<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class Adm extends BaseController
{
    public function index()
    {
        $pelangganModel = new PelangganModel();

        // Ambil data pelanggan dari database
        $data['pelanggan'] = $pelangganModel->findAll();

        echo view('part_adm/header');
        echo view('part_adm/topbar');
        echo view('adm', $data);
    }

    
}