<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'data_pelanggan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'alamat', 'no_hp', 'awal_sewa', 'akhir_sewa', 'jumlah_produk', 'total_biaya'];

    public function getLatestID()
    {
        // Ambil ID terbaru setelah data dihapus
        $latestID = $this->selectMax('id')->first();

        // Jika belum ada data, beri nilai awal 1
        return $latestID ? $latestID['id'] + 1 : 1;
    }
}