<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin\Auth;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//login register Route
$routes->get('/register', 'Admin\Auth::register');
$routes->post('register/create', 'Admin\Auth::create');
$routes->get('login', [Auth::class,"login"]);
$routes->post('login/authenticate', 'Admin\Auth::authenticate');
$routes->get('logout', 'Admin\Auth::logout');

//admin
$routes->group("petugas",['filter' => 'role:petugas'],function($routes){
    $routes->get("dashboard",'Admin\Dashboard');
    $routes->get("data_pendonor/delete/(:num)",'Admin\DataPendonor::delete/$1');
    $routes->get("laporan_pendonor",'Admin\Laporan');
    $routes->get("laporan_pendonor/export/(:num)",'Admin\Laporan::exportDonorToPDF/$1');
    $routes->get("laporan_pendonor/(:num)",'Admin\Laporan::detail/$1');
    $routes->post("laporan_pendonor/edit/(:num)",'Admin\Laporan::edit/$1');
    $routes->get("assesment/(:num)",'Admin\AssesmentController::get/$1');
    $routes->post("assesment",'Admin\AssesmentController::create');
    $routes->get("cek_darah",'Admin\CekDarah');
    $routes->get("cek_darah/(:num)",'Admin\CekDarah::detail/$1');
    $routes->post("cek_darah",'Admin\CekDarah::store');
    $routes->get("data_pendonor",'Admin\DataPendonor');
    $routes->get("data_pendonor/(:num)",'Admin\DataPendonor::detail/$1');
});

//pendonor
$routes->group("pendonor",['filter' => 'role:user'],function($routes){
    $routes->get("dashboard",'Pendonor\Dashboard');
    $routes->get("kuisoner",'Pendonor\Dashboard::kuisoner');
    $routes->post("kuisoner/(:num)",'Pendonor\Dashboard::store_kuisoner/$1');
    $routes->get("edit_profile/(:num)","Pendonor\Profile::edit/$1");
    $routes->post('update/(:num)', 'Pendonor\Profile::store/$1');
});