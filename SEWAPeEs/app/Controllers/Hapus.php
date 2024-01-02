<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class Hapus extends BaseController
{
    public function index()
    {
        $pelangganModel = new PelangganModel();
        $data['pelanggan'] = $pelangganModel->findAll(); // Mengambil semua data pelanggan

        echo view('part_adm_hapus/header');
        echo view('part_adm_hapus/topbar');
        echo view('hapus', $data); // Mengirim data pelanggan ke view
    }

    public function proses()
    {
        // Mengambil data ID yang dipilih untuk dihapus
        $selectedIds = $this->request->getPost('selectedIds');

        if (!empty($selectedIds)) {
            $pelangganModel = new PelangganModel();

            // Looping untuk setiap ID yang dipilih dan hapus data dari database
            foreach ($selectedIds as $id) {
                $pelangganModel->delete($id);
            }

            return redirect()->to('hapus')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->to('hapus')->with('error', 'Tidak ada data yang dipilih untuk dihapus.');
        }
    }
}
