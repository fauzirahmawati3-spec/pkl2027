
<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Landing page: publik, tanpa login
$routes->get('/', 'Home::index');

// Autentikasi
$routes->get('login', 'Auth::login');
$routes->post('proses-login', 'Auth::prosesLogin');
$routes->get('logout', 'Auth::logout');

// Tes database sementara
$routes->get('test-database', 'TestDatabase::index');

// Fitur yang wajib login
$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->get('dashboard', 'Dashboard::index');
});
