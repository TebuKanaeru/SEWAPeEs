<?php

namespace App\Models;

use CodeIgniter\Model;

class CheckoutModel extends Model
{
    protected $table = 'checkout_data'; // Ganti dengan nama tabel di PHPMyAdmin
    protected $primaryKey = 'id'; // Ganti dengan nama kolom primary key di tabel

    protected $allowedFields = ['nama', 'email', 'alamat', 'nomor_handphone', 'awal_sewa', 'akhir_sewa', 'jumlah_produk', 'total_biaya']; // Sesuaikan dengan kolom-kolom di tabel checkout
}