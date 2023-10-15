<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rute untuk anggota
$routes->get('anggota', 'AnggotaController::index');
$routes->get('anggota/create', 'AnggotaController::create');
$routes->post('anggota/store', 'AnggotaController::store');
$routes->get('anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->post('anggota/update/(:num)', 'AnggotaController::update/$1');
$routes->get('anggota/delete/(:num)', 'AnggotaController::delete/$1');

// Rute untuk Peminjaman
$routes->get('peminjaman', 'PeminjamanController::index');
$routes->get('peminjaman/create', 'PeminjamanController::create');
$routes->post('peminjaman/store', 'PeminjamanController::store');
$routes->get('peminjaman/edit/(:num)', 'PeminjamanController::edit/$1');
$routes->post('peminjaman/update/(:num)', 'PeminjamanController::update/$1');
$routes->get('peminjaman/delete/(:num)', 'PeminjamanController::delete/$1');