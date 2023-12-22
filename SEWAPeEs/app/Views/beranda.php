   <!--product section-->
   
   <div id="session1" class="container-prop ">
    <div class="heading_container heading_center">
      <h2> Pilihan Playstation </h2>
    </div>

    <div class="product-section-img">
      <div class="product-image">
            <img src="<?= base_url('template/images/ps4.png')?>" alt="Product 1">
      </div>

      <div class="product-image">
            <img src="<?= base_url('template/images/ps4slim.png')?>" alt="Product 1">
      </div>

      <div class="product-image">
            <img src="<?= base_url('template/images/ps4pro.png')?>" alt="Product 1">
      </div>

      <div class="product-image">
            <img src="<?= base_url('template/images/ps5std.png')?>" alt="Product 1">
      </div>

      <div class="product-image">
            <img src="<?= base_url('template/images/ps5de.png')?>" alt="Product 1">
      </div>
    </div>

    <div class="product-section">
    <?php foreach ($produk as $produkItem) : ?>
    <div class="product">
          <h3><?= $produkItem['nama_produk']; ?></h3>
          <p>Stok yang tersedia: <?= $produkItem['stok']; ?></p>
         </div>
      <?php endforeach; ?>
    </div>
    

    <!-- Add more product entries as needed -->

  </div>
  <!--end product section-->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div id="session2" class="container ">
      <div class="heading_container heading_center">
        <h2> Layanan Kami </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="<?= base_url('template/images/Mortal-Kombat-logo.png')?>" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Game
              </h5>
              <p>
                Penyewaan PS sudah termasuk 5 game yang dapat dipilih sesuai selera
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="<?= base_url('template/images/delivery.png')?>" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Gratis Antar/Jemput
              </h5>
              <p>
                Penyewaan PS sudah termasuk dengan antar/jemput perangkat
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="<?= base_url('template/images/installing.png')?>" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Instalasi
              </h5>
              <p>
                Penyewaan PS sudah termasuk pemasangan perangkat
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- about section -->
  
  <section class="about_section layout_padding">
    <div id="session3" class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="detail-box">
            <h2>
              About us
            </h2>
            <p>
              Sekumpulan anak muda yang menyukai console dari playstation dan gamenya.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="img-box">
            <img src="<?= base_url('template/images/psfb.jpg')?>" alt="about" height="600px" width="800px">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->