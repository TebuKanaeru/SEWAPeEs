<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Beranda::index');
$routes->get('login', 'Login::index');
$routes->get('adm', 'Adm::index');
$routes->get('tambah', 'Tambah::index');
$routes->post('tambah/simpanData', 'Tambah::simpanData');
$routes->get('hapus', 'Hapus::index');
$routes->post('hapus/proses', 'Hapus::proses'); 



