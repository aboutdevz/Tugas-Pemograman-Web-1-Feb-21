<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Modules\Home\Controllers');
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
$routes->group('Home', ['namespace' => 'App\Modules\Home\Controllers'], function($routes)
{
    $routes->add('/', 'Home::index');
});
$routes->group('Login', ['namespace' => 'App\Modules\Login\Controllers'], function($routes)
{
	$routes->add('/', 'Login::index');
	$routes->add('Login/', 'Login::Login');
	
});
$routes->group('Guru', ['namespace' => 'App\Modules\Guru\Controllers'], function($routes)
{
	$routes->add('/', 'Guru::index');
	$routes->add('getAllGuru/', 'Guru::getAllGuru');
	$routes->add('insertGuru/', 'Guru::insertGuru');
	$routes->add('pageUpdateGuru/(:num)', 'Guru::pageUpdateGuru/$1');
	$routes->add('updateGuru/(:num)', 'Guru::updateGuru/$1');
	$routes->add('deleteGuru/(:num)', 'Guru::deleteGuru/$1');

});
$routes->group('Pelajaran', ['namespace' => 'App\Modules\Pelajaran\Controllers'], function($routes)
{
	$routes->add('/', 'Pelajaran::index');
	$routes->add('getAllPelajaran/', 'Pelajaran::getAllPelajaran');
	$routes->add('insertPelajaran/', 'Pelajaran::insertPelajaran');
	$routes->add('pageUpdatePelajaran/(:num)', 'Pelajaran::pageUpdatePelajaran/$1');
	$routes->add('updatePelajaran/(:num)', 'Pelajaran::updatePelajaran/$1');
	$routes->add('deletePelajaran/(:num)', 'Pelajaran::deletePelajaran/$1');
	
});

$routes->group('Siswa', ['namespace' => 'App\Modules\Siswa\Controllers'], function($routes)
{
	$routes->add('/', 'Siswa::index');
	$routes->add('getAllNilai/', 'Siswa::getAllNilai');
	$routes->add('getAllSiswa/', 'Siswa::getAllSiswa');
	$routes->add('NilaiSiswa/', 'Siswa::NilaiSiswa');


	$routes->add('insertSiswa/', 'Siswa::insertSiswa');
	$routes->add('pageUpdateSiswa/(:num)', 'Siswa::pageUpdateSiswa/$1');
	$routes->add('updateSiswa/(:num)', 'Siswa::updateSiswa/$1');
	$routes->add('deleteSiswa/(:num)', 'Siswa::deleteSiswa/$1');

	$routes->add('insertNilaiSiswa/', 'Siswa::insertNilaiSiswa');
	$routes->add('pageUpdateNilaiSiswa/(:any)', 'Siswa::pageUpdateNilaiSiswa/$1');
	$routes->add('updateNilaiSiswa/(:any)', 'Siswa::updateNilaiSiswa/$1');
	$routes->add('deleteNilaiSiswa/(:any)', 'Siswa::deleteNilaiSiswa/$1');
	
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
