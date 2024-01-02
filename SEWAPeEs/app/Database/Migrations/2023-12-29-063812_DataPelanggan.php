<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataPelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 100,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],

			'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,

			],
			
            'alamat'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
            
			'no_hp'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
            ],

            'awal_sewa'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
            ],

            'akhir_sewa'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
            ],

            'jumlah_produk'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
            ],

            'total_biaya'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
            ],

		]);

        // Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('data_pelanggan', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('data_pelanggan');
    }
}
