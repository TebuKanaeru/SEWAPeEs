<body>
    <div class="container_del">
        <h2>Hapus Data</h2>
        <?php if (!empty($pelanggan)) : ?>
            <form action="<?= base_url('hapus/proses'); ?>" method="post" onsubmit="return validateForm();">
                <table border="1">
                    <!-- Tambahkan baris ini sebagai header -->
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <th>Awal Sewa</th>
                            <th>Akhir Sewa</th>
                            <th>Jumlah Produk</th>
                            <th>Total Biaya</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pelanggan as $row) : ?>
                            <tr>
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td><?= $row['no_hp']; ?></td>
                                <td><?= $row['awal_sewa']; ?></td>
                                <td><?= $row['akhir_sewa']; ?></td>
                                <td><?= $row['jumlah_produk']; ?></td>
                                <td><?= $row['total_biaya']; ?></td>
                                <td><input type="checkbox" name="selectedIds[]" value="<?= $row['id']; ?>"></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button type="submit">Hapus Data Terpilih</button>
            </form>
        <?php else : ?>
            <p>Tidak ada data pelanggan.</p>
        <?php endif; ?>
        <a href="<?= site_url('adm'); ?>">Kembali ke Halaman Utama</a>
    </div>

    <!-- ... (Bagian footer) ... -->
</body>
</html>