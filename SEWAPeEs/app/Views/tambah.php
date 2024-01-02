<div class="container_form">
        <h2>Tambah Data Pelanggan</h2>
        <form action="<?= base_url('tambah/simpanData'); ?>" method="post">
            <!-- Ganti 'simpan-data-pelanggan' dengan URL sesuai kebutuhan -->

            <!-- Isi formulir dengan kolom-kolom yang sesuai dengan struktur tabel di database -->
            <label for="id">ID:</label>
            <input type="text" name="id" value="<?= $nextID; ?>" readonly>

            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="alamat">Alamat:</label>
            <textarea name="alamat" required></textarea>

            <label for="no_hp">Nomor HP:</label>
            <input type="text" name="no_hp" required>

            <label for="awal_sewa">Awal Sewa:</label>
            <input type="date" name="awal_sewa" required>

            <label for="akhir_sewa">Akhir Sewa:</label>
            <input type="date" name="akhir_sewa" required>

            <label for="jumlah_produk">Jumlah Produk:</label>
            <input type="text" name="jumlah_produk" required>

            <label for="total_biaya">Total Biaya:</label>
            <input type="text" name="total_biaya" required>
            
            <button type="submit">Simpan Data</button>
        </form>
    </div>

    <!-- Tambahkan link script JavaScript di sini jika diperlukan -->
</body>
</html>