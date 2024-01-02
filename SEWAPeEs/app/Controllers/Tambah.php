<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class Tambah extends BaseController
{
    public function index()
    {
        $pelangganModel = new PelangganModel();
        $data['nextID'] = $pelangganModel->getLatestID();

        echo view('part_adm_tambah/header');
        echo view('part_adm_tambah/topbar', $data);
        echo view('tambah');
    }

    public function simpanData()
    {
        $pelangganModel = new PelangganModel();

        $data = [
            'id' => $this->request->getPost('id'), // ID diambil dari form atau di-generate di sini
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
            'awal_sewa' => $this->request->getPost('awal_sewa'),
            'akhir_sewa' => $this->request->getPost('akhir_sewa'),
            'jumlah_produk' => $this->request->getPost('jumlah_produk'),
            'total_biaya' => $this->request->getPost('total_biaya'),
        ];

        $pelangganModel->insert($data);

        // Redirect ke halaman adm setelah menyimpan data
        return redirect()->to('adm');
    }
}