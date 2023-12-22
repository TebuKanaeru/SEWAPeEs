<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'produk'; // Ganti 'produk' sesuai dengan nama tabel di PHPMyAdmin
    protected $primaryKey = 'id_produk'; // Ganti 'id_produk' sesuai dengan nama kolom primary key di tabel

    protected $allowedFields = ['nama_produk', 'harga_sewa','stok']; // Sesuaikan dengan kolom-kolom yang ingin diambil dari tabel
}
