<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('dashboard', 'DashboardController::index');

$routes->get('data-pasien', 'PasienController::tabel_data_pasien');
$routes->get('data-pasien-admin', 'PasienController::tabel_data_pasien_admin');
$routes->get('data-pasien-admin/tambah', 'PasienController::tambah');
$routes->post('data-pasien-admin/simpan', 'PasienController::simpan');
$routes->get('data-pasien-admin/edit/(:num)', 'PasienController::edit/$1');
$routes->post('data-pasien-admin/update', 'PasienController::update');
$routes->get('data-pasien-admin/delete/(:num)', 'PasienController::delete/$1');


$routes->get('data-riwayat', 'RiwayatController::index');
$routes->get('data-riwayat/tambah', 'RiwayatController::tambah');
$routes->post('data-riwayat/simpan', 'RiwayatController::simpan');
$routes->get('data-riwayat/edit/(:num)', 'RiwayatController::edit/$1');
$routes->post('data-riwayat/update', 'RiwayatController::update');
$routes->get('data-riwayat/delete/(:num)', 'RiwayatController::delete/$1');

$routes->get('data-berat-badan', 'BeratBadanController::index');
$routes->get('data-berat-badan/tambah', 'BeratBadanController::tambah');
$routes->post('data-berat-badan/simpan', 'BeratBadanController::simpan');
$routes->get('data-berat-badan/edit/(:num)', 'BeratBadanController::edit/$1');
$routes->post('data-berat-badan/update', 'BeratBadanController::update');
$routes->get('data-berat-badan/delete/(:num)', 'BeratBadanController::delete/$1');

$routes->get('data-penyakit', 'PenyakitController::index');
$routes->get('data-penyakit/tambah', 'PenyakitController::tambah');
$routes->post('data-penyakit/simpan', 'PenyakitController::simpan');
$routes->get('data-penyakit/edit/(:any)', 'PenyakitController::edit/$1');
$routes->post('data-penyakit/update', 'PenyakitController::update');
$routes->get('data-penyakit/delete/(:any)', 'PenyakitController::delete/$1');

$routes->get('data-gejala', 'GejalaController::index');
$routes->get('data-gejala/tambah', 'GejalaController::tambah');
$routes->post('data-gejala/simpan', 'GejalaController::simpan');
$routes->get('data-gejala/edit/(:any)', 'GejalaController::edit/$1');
$routes->post('data-gejala/update', 'GejalaController::update');
$routes->get('data-gejala/delete/(:any)', 'GejalaController::delete/$1');

$routes->get('data-pengetahuan', 'PengetahuanController::index');
$routes->get('data-pengetahuan/tambah', 'PengetahuanController::tambah');
$routes->post('data-pengetahuan/simpan', 'PengetahuanController::simpan');
$routes->get('data-pengetahuan/edit/(:any)', 'PengetahuanController::edit/$1');
$routes->post('data-pengetahuan/update/(:num)', 'PengetahuanController::update/$1');
$routes->get('data-pengetahuan/delete/(:any)', 'PengetahuanController::delete/$1');

$routes->get('parent-tree', 'ParentTreeController::index');
$routes->post('parent-tree/upload', 'ParentTreeController::upload');


$routes->get('form-grafik', 'BeratBadanController::form_grafik');
$routes->get('/berat-badan/grafik', 'BeratBadanController::grafikBeratBadan');

$routes->get('landing-page', 'LandingPageController::index');

$routes->post('/diagnosa', 'Home::diagnosa');


$routes->get('data-artikel', 'ArtikelController::index');
$routes->get('data-artikel/tambah', 'ArtikelController::tambah');
$routes->post('data-artikel/simpan', 'ArtikelController::simpan');
$routes->get('data-artikel/edit/(:num)', 'ArtikelController::edit/$1');
$routes->post('data-artikel/update', 'ArtikelController::update');
$routes->get('data-artikel/delete/(:num)', 'ArtikelController::delete/$1');

$routes->get('kelola-akun', 'UsersController::index');
$routes->get('kelola-akun/tambah', 'UsersController::tambah');
$routes->post('kelola-akun/simpan', 'UsersController::simpan');


$routes->get('pengguna', 'PenggunaController::index');
$routes->get('pengguna/tambah', 'PenggunaController::tambah');
$routes->post('pengguna/simpan', 'PenggunaController::simpan');
$routes->get('pengguna/edit/(:num)', 'PenggunaController::edit/$1');
$routes->post('pengguna/update', 'PenggunaController::update');
$routes->get('pengguna/delete/(:num)', 'PenggunaController::delete/$1');

$routes->get('profil', 'ProfileController::index');







