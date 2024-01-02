<section class="ftco-section">
	<h2>Data Pelanggan</h2>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<div class="table-wrap">
    <table class="table">
        <thead class="thead-primary">
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
                </tr>
            			<?php endforeach; ?>
       				 </tbody>
    				</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



