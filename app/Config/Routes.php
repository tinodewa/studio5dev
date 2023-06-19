<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//base route
$routes->get('/', 'HomeUser::index');
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');

//admin route
$routes->get('/admin', 'AdminController::index');

//admin user route
$routes->get('/admin/user', 'AdminUserController::index');
$routes->get('/admin/user/new', 'AdminUserController::new');
$routes->post('/admin/user/new', 'AdminUserController::create');
$routes->get('/admin/user/(:segment)/edit', 'AdminUserController::edit/$1', ['$1' => '[0-9]+']);
$routes->post('/admin/user/(:segment)/edit', 'AdminUserController::update');
$routes->post('/admin/user/remove', 'AdminUserController::delete');

//admin paket route
$routes->get('/admin/paket', 'AdminPaketController::index');
$routes->get('/admin/paket/new', 'AdminPaketController::new');
$routes->post('/admin/paket/new', 'AdminPaketController::create');
$routes->get('/admin/paket/(:segment)/edit', 'AdminPaketController::edit/$1', ['$1' => '[0-9]+']);
$routes->post('/admin/paket/(:segment)/edit', 'AdminPaketController::update');
$routes->post('/admin/paket/remove', 'AdminPaketController::delete');

//admin pesanan route
$routes->get('/admin/pesanan', 'AdminPesananController::index');
$routes->get('/admin/pesanan/new', 'AdminPesananController::new');
$routes->post('/admin/pesanan/new', 'AdminPesananController::create');
$routes->get('/admin/pesanan/(:segment)/edit', 'AdminPesananController::edit/$1', ['$1' => '[0-9]+']);
$routes->post('/admin/pesanan/(:segment)/edit', 'AdminPesananController::update');
$routes->post('/admin/pesanan/remove', 'AdminPesananController::delete');

//admin pembayaran route
$routes->get('/admin/pembayaran', 'AdminPembayaranController::index');
$routes->get('/admin/pembayaran/new', 'AdminPembayaranController::new');
$routes->post('/admin/pembayaran/new', 'AdminPembayaranController::create');
$routes->get('/admin/pembayaran/(:segment)/edit', 'AdminPembayaranController::edit/$1', ['$1' => '[0-9]+']);
$routes->post('/admin/pembayaran/(:segment)/edit', 'AdminPembayaranController::update');
$routes->post('/admin/pembayaran/remove', 'AdminPembayaranController::delete');

//admin ulasan route
$routes->get('/admin/ulasan', 'AdminUlasanController::index');
$routes->get('/admin/ulasan/new', 'AdminUlasanController::new');
$routes->post('/admin/ulasan/new', 'AdminUlasanController::create');
$routes->get('/admin/ulasan/(:segment)/edit', 'AdminUlasanController::edit/$1', ['$1' => '[0-9]+']);
$routes->post('/admin/ulasan/(:segment)/edit', 'AdminUlasanController::update');
$routes->post('/admin/ulasan/remove', 'AdminUlasanController::delete');

//admin hasil foto route
$routes->get('/admin/hasil-foto', 'AdminHasilFotoController::index');
$routes->get('/admin/hasil-foto/new', 'AdminHasilFotoController::new');
$routes->post('/admin/hasil-foto/new', 'AdminHasilFotoController::create');
$routes->get('/admin/hasil-foto/(:segment)/edit', 'AdminHasilFotoController::edit/$1', ['$1' => '[0-9]+']);
$routes->post('/admin/hasil-foto/(:segment)/edit', 'AdminHasilFotoController::update');
$routes->post('/admin/hasil-foto/remove', 'AdminHasilFotoController::delete');

//fotografer route
$routes->get('/fotografer', 'Fotografer::index');
$routes->get('/fotografer/pesanan/(:num)/detail', 'Fotografer::pesananDetail/$1');
$routes->post('/fotografer/pesanan/(:num)/detail/simpan', 'Fotografer::pesananDetailSimpanHasilFoto/$1');

//user route
$routes->get('/paket/detail/(:num)', 'HomeUser::paketDetail/$1');
$routes->get('/paket/detail/(:num)/checkout', 'HomeUser::paketPesan/$1');
$routes->get('/paket/custom/(:num)', 'HomeUser::paketCustom/$1');
$routes->post('/paket/custom', 'HomeUser::paketSimpanCustom');
$routes->post('/paket/detail', 'HomeUser::paketMasukKeranjang');
$routes->get('/checkout', 'HomeUser::checkoutPesanan');
$routes->post('/checkout', 'HomeUser::checkoutSimpanPesanan');
$routes->post('/checkout/remove', 'HomeUser::checkoutHapusKeranjang');
$routes->get('/list-pesanan', 'HomeUser::listPesanan');
$routes->get('/list-pesanan/(:num)/detail', 'HomeUser::listPesananDetail/$1');
$routes->post('/list-pesanan/(:num)/detail/simpan-bukti', 'HomeUser::simpanBukti/$1');

//payment
$routes->get('payment', 'PaymentController::index');

$routes->get('(:any)', 'HomeUser::index');

// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('(:segment)', [Pages::class, 'view']);

/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
