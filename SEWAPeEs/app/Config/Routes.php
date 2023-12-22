<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Beranda::index');
$routes->get('/shoplist', 'Shoplist::index');
$routes->get('/confirm', 'Confirm::index');
$routes->get('/checkout', 'Checkout::index');





