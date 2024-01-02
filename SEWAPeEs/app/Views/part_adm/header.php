<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SEWA PeEs</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link href="<?= base_url('template/css/bootstrap.css')?>" rel="stylesheet" type="text/css"/>
  <!-- font awesome style -->
  <link href="<?= base_url('template/css/style.css')?>" rel="stylesheet" type="text/css"/>

  <!-- Custom styles for this template -->
  <link href="<?= base_url('template/css/style.css')?>" rel="stylesheet" type="text/css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="<?= base_url('template/css/responsive.css')?>" rel="stylesheet" type="text/css" rel="stylesheet"/>
  <link href="<?= base_url('template/images/logotl.ico')?>" rel="stylesheet" rel="icon" type="image/x-icon"/>

</head>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Tangkap elemen menu dan submenu
        const dataPelanggan = document.getElementById('dataPelanggan');
        const submenuPelanggan = document.getElementById('submenuPelanggan');

        // Tambahkan event listener untuk klik pada menu dataPelanggan
        dataPelanggan.addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah link berpindah ke halaman lain
            toggleSubmenu(submenuPelanggan);
        });
    });

    // Fungsi untuk menampilkan atau menyembunyikan submenu
    function toggleSubmenu(submenu) {
        if (submenu.style.display === 'block') {
            submenu.style.display = 'none';
        } else {
            submenu.style.display = 'block';
        }
    }
</script>

<body>
  <div class="hero_area_adm">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href=#>
              <span>
                SEWA PeEs
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

           <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
              <li class="nav-item active">
                  <a class="nav-link" href="<?= site_url('tambah') ?>"> Tambah Pelanggan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= site_url('hapus') ?>"> Hapus Data</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= site_url('/') ?>"> Logout</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->