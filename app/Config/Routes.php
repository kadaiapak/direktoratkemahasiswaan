<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  route untuk home
$routes->get('/', 'Home::index');
$routes->get('/profil-ditmawa', 'Home::profilDitmawa');
$routes->get('/struktur-organisasi', 'Home::strukturOrganisasi');
$routes->get('/unit-kegiatan', 'Home::unitKegiatan');
$routes->get('/semua-prestasi', 'Home::semuaPrestasi');
$routes->get('/panduan-bebas-ukt', 'Home::panduanBebasUkt');
$routes->get('/panduan-sib', 'Home::panduanSib');

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'adminDanSuperAdminFilter']);

// ROUTE BERITA
    // ROUTE UNTUK BERITA USER
    $routes->get('/semua-berita', 'UserBerita::semua_berita');
    $routes->get('/berita/(:any)', 'UserBerita::detail/$1');
    $routes->get('/berita-beasiswa', 'UserBerita::berita_beasiswa');
    $routes->get('/berita-organisasi', 'UserBerita::berita_organisasi');
    $routes->get('/berita-prestasi', 'UserBerita::berita_prestasi');
    // AKHIR ROUTE UNTUK BERITA USER

    // ROUTE UNTUK BERITA ADMIN
    $routes->get('admin/berita', 'Berita::index',['filter' => 'adminDanSuperAdminFilter']);
    $routes->get('admin/berita/detail/(:any)', 'Berita::detail');
    $routes->get('admin/berita/tambah', 'Berita::tambah',['filter' => 'adminFilter']);
    $routes->post('admin/berita/simpan', 'Berita::simpan',['filter' => 'adminFilter']);
    $routes->get('admin/berita/edit/(:any)', 'Berita::edit/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/berita/update/(:any)', 'Berita::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    $routes->get('admin/berita/hapus/(:any)', 'Berita::hapus/$1');

    // AHKIR ROUTE BERITA ADMIN
// AKHIR ROUTE BERITA

// ROUTE DOWNLOAD
    // ROUTE DOWNLOAD UNTUK ADMIN
    $routes->get('admin/download', 'Download::index',['filter' => 'adminFilter']);
    $routes->get('admin/download/tambah', 'Download::tambah',['filter' => 'adminFilter']);
    $routes->post('admin/download/simpan', 'Download::simpan',['filter' => 'adminFilter']);
    $routes->get('admin/download/edit/(:any)', 'Download::edit/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/download/update/(:any)', 'Download::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    // AKHIR ROUTE DOWNLOAD UNTUK ADMIN

    // ROUTE DOWNLOAD UNTUK USER
    $routes->get('/semua-download', 'UserDownload::semua_download');
    $routes->get('/semua-download/(:any)', 'UserDownload::download/$1');
    // AKHIR ROUTE DOWNLOAD UNTUK USER
// AKHIR ROUTE DOWNLOAD

// ROUTE UNTUK AGENDA
    // ROUTE UNTUK AGENDA ADMIN
    $routes->get('admin/agenda', 'Agenda::admin_agenda',['filter' => 'adminFilter']);
    $routes->get('admin/agenda/tambah', 'Agenda::tambah',['filter' => 'adminFilter']);
    $routes->post('admin/agenda/simpan', 'Agenda::simpan',['filter' => 'adminFilter']);
    $routes->get('admin/agenda/edit/(:any)', 'Agenda::edit/$1',['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/agenda/update/(:any)', 'Agenda::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    // AKHIR ROUTE UNTUK AGENDA ADMIN

    // ROUTE AGENDA USER
    $routes->get('/semua-agenda', 'UserAgenda::semua_agenda');
    // AKHIR ROUTE AGENDA USER
// AKHIR ROUTE AGENDA

// ROUTE UNTUK UKORMAWA
    // ROUTE UKORMAWA ADMIN
    $routes->get('admin/ukormawa', 'Ukormawa::admin_ukormawa',['filter' => 'adminFilter']);
    $routes->get('admin/ukormawa/tambah', 'Ukormawa::tambah',['filter' => 'adminFilter']);
    $routes->post('admin/ukormawa/simpan', 'Ukormawa::simpan',['filter' => 'adminFilter']);
    $routes->get('admin/ukormawa/edit/(:any)', 'Ukormawa::edit/$1',['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/ukormawa/update/(:any)', 'Ukormawa::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    // AKHIR ROUTE UKORMAWA ADMIN
// AKHIR ROUTE UKORMAWA

// ROUTE UNTUK PENYIMPANAN GAMBAR ADMIN
$routes->get('penyimpanan-gambar', 'PenyimpananGambar::index',['filter' => 'adminFilter']);
$routes->get('penyimpanan-gambar/tambah', 'PenyimpananGambar::tambah',['filter' => 'adminFilter']);
$routes->post('penyimpanan-gambar/simpan', 'PenyimpananGambar::simpan',['filter' => 'adminFilter']);
// AKHIR ROUTE PENYIMPANAN GAMBAR ADMIN


// ROUTE LOGIN
$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/logout', 'Auth::logout');
$routes->post('/auth/loginProcess', 'Auth::loginProcess');
// AKHIR ROUTE LOGIN

// route untuk User Level
    // bisa di akses oleh super admin 
    $routes->get('/user_level', 'UserLevel::index', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->get('/user_level/tambah', 'UserLevel::tambah', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/user_level/simpan', 'UserLevel::simpan', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->get('/user_level/(:any)/edit', 'UserLevel::edit/$1', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/user_level/(:any)/update', 'UserLevel::update/$1', ['filter' => 'superAdminFilter']);
// akhir dari route untuk User 

// route untuk User
    // bisa di akses oleh super admin 
    $routes->get('/user', 'User::index', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->get('/user/tambah', 'User::tambah', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/user/simpan', 'User::simpan', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->get('/user/(:any)/edit', 'User::edit/$1', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/user/(:any)/update', 'User::update/$1', ['filter' => 'superAdminFilter']);
// akhir dari route untuk User

// route untuk Menu
    // bisa di akses oleh super admin 
    $routes->get('/menu', 'Menu::index', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->get('/menu/tambah', 'Menu::tambah', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/menu/simpan', 'Menu::simpan', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->get('/menu/(:any)/edit', 'Menu::edit/$1', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/menu/(:any)/update', 'Menu::update/$1', ['filter' => 'superAdminFilter']);
// akhir dari route untuk User


// ROUTE PROFIL
    // diakses oleh mahasiswa untuk meilhat detail profil mereka
    $routes->get('/profil', 'Profil::index', ['filter' => 'mahasiswaFilter']);
   // diakses mahasiswa untuk melakukan verifikasi data pertama kali saat dia menggunakan aplikasi ini
   $routes->get('/profil/verifikasi', 'Profil::verifikasi', ['filter' => 'mahasiswaFilter']);
   // diakses mahasiswa untuk melakukan verifikasi data pertama kali saat dia menggunakan aplikasi ini
   $routes->post('/profil/update_verifikasi', 'Profil::update_verifikasi', ['filter' => 'mahasiswaFilter']);
// AKHIR ROUTE PROFIL


    


