<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
	setlocale(LC_TIME, 'IND');
	//setlocale(LC_TIME, 'id_ID.utf8'); //server
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

/* =================================== User ============================== */
$routes->get('/', 'Halaman::beranda');
$routes->get('peta_desa', 'Halaman::peta_desa');
$routes->get('pemerintah_desa', 'Halaman::pemerintah_desa');
$routes->get('visi_dan_misi', 'Halaman::visi_misi');
$routes->get('galeri', 'Halaman::galeri');
$routes->get('kontak', 'Halaman::kontak');
$routes->get('berita', 'Halaman::artikel');
$routes->get('berita/(:num)/(:any)', 'Halaman::artikel_detail/$1/$2');

/* =================================== End User ============================== */



/* =================================== Auth ============================== */
$routes->get('login_admin', 'Auth::admin_login');
$routes->post('login_admin', 'Auth::validasi_admin_login');
$routes->get('logout', 'Auth::slogout');


/* =================================== End Auth ============================== */


/* =================================== Admin ============================== */

$routes->get('dashboard', 'Admin::dashboard');
$routes->get('dashboard/post', 'Media::post');
$routes->get('dashboard/post/new_post', 'Media::new_post');
$routes->post('dashboard/post/new_post', 'Media::input_new_post');
$routes->get('dashboard/post/edit_post/(:num)', 'Media::edit_post/$1');
$routes->post('dashboard/post/edit_post/(:num)', 'Media::update_post/$1');
$routes->get('dashboard/post/hapus_post/(:num)', 'Media::delete_post/$1');
$routes->get('dashboard/post/status_post/(:num)/(:any)', 'Media::status_post/$1/$2');


$routes->get('dashboard/galeri', 'Media::galeri');
$routes->get('dashboard/galeri/new_galeri', 'Media::new_galeri');
$routes->post('dashboard/galeri/new_galeri', 'Media::input_galeri');



// Profile
$routes->get('dashboard/visi_misi', 'Profile_Desa::visi_misi');
$routes->post('dashboard/visi_misi', 'Profile_Desa::update_visi_misi');

/* =================================== End Admin ============================== */


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
