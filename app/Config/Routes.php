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
$routes->get('/admin/user/(:segment)', 'AdminUserController::show/$1', ['$1' => '[0-9]+']);
$routes->get('/admin/user/new', 'AdminUserController::new');
$routes->post('/admin/user', 'AdminUserController::create');
$routes->get('/admin/user/(:segment)/edit', 'AdminUserController::edit/$1', ['$1' => '[0-9]+']);
$routes->put('/admin/user/(:segment)', 'AdminUserController::update/$1', ['$1' => '[0-9]+']);
$routes->delete('/admin/user/(:segment)', 'AdminUserController::delete/$1', ['$1' => '[0-9]+']);


// $routes->resource('pesanan', [Pesanan::class]);
// $routes->resource('hasilfoto', [HasilFoto::class]);
// $routes->resource('paket', [Paket::class]);
// $routes->resource('pembayaran', [Pembayaran::class]);
// $routes->resource('ulasan', [Ulasan::class]);

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
