<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');

// admin route
$routes->get('admin', 'Admin\Admin::index');
$routes->get('admin/login', 'Admin\Login::index');
$routes->get('admin/logout', 'Admin\Login::logout');
$routes->get('admin/tambah', 'Admin\tambah::index');
$routes->get('admin/produk', 'Admin\Admin::all');
$routes->get('admin/transaksi', 'Admin\Admin::alltrans');
$routes->get('admin/pengguna', 'Admin\Admin::allUsers');
$routes->get('admin/editproduk/(:num)', 'Admin\Admin::produk');
$routes->get('admin/hapus/(:num)', 'Admin\Admin::hapusprod');
$routes->get('admin/hapususer/(:num)', 'Admin\Admin::hapususer');
$routes->get('admin/hapustrans/(:num)', 'Admin\Admin::hapustrans');
$routes->add('admin/viewtrans/(:num)', 'Admin\Admin::transaksi');
$routes->add('admin/tolak/(:num)', 'Admin\Admin::tolak');
$routes->add('admin/editproduk/(:num)', 'Admin\Admin::produk');
$routes->add('admin/laporan/', 'Admin\Admin::laporan');
$routes->add('admin/grafik', 'Admin\Admin::grafik');
// dokumen
$routes->get('admin/singleuser/(:num)', 'Admin\Admin::singleuser');
$routes->add('admin/singleuser/(:num)', 'Admin\Admin::singleuser');


// tambah jadwal
$routes->get('admin/tambahjadwal', 'Admin\Admin::tambahjadwal');
$routes->get('admin/keberangkatan', 'Admin\Admin::keberangkatan');
$routes->get('admin/hapusjadwal/(:num)', 'Admin\Admin::hapusjadwal');
$routes->add('admin/tambahjadwal', 'Admin\Admin::tambahjadwal');

// user route
$routes->get('user', 'User\User::index');
$routes->get('user/login', 'User\login::index');
$routes->get('user/register', 'User\register::index');
$routes->get('user/informasi/(:num)', 'User\User::informasi');
$routes->get('user/beli', 'User/User::beli');
$routes->get('user/logout', 'User\User::logout');
$routes->get('user/transaksi', 'User\User::transaksi');
$routes->get('user/checkout/(:num)', 'User\User::checkout');
$routes->add('user/bayar/(:num)', 'User\Bayar::index');
$routes->add('user/bayar/', 'User\Bayar::index');
// berkas
$routes->get('user/berkas', 'User\berkas::index');

// jadwal
$routes->get('jadwal', 'User\User::jadwal');



// 
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
