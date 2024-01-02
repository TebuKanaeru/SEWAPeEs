<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Datapelanggan extends Seeder
{
    public function run()
    {
        // membuat data
		$datapelanggan_data = [
			[
				'nama' => 'Jay',
				'email'  => 'Jasutraw1@gmail.com',
				'alamat' => 'Jl. Cikutra',
                'no_hp' => '081234567890',
                'awal_sewa' => '12-12-2023',
                'akhir_sewa' => '19-12-2023',
                'jumlah_produk' => 'Playstation 5 SE',
                'total_biaya' => 'Rp. 350.000',
			],
		];

		foreach($datapelanggan_data as $data){
			// insert semua data ke tabel
			$this->db->table('data_pelanggan')->insert($data);
		}
    }
}
