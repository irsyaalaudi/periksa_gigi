<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login'); // route default ke login
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

// Dashboard routes
$routes->get('admin', 'DashboardController::admin', ['filter' => 'role:admin']);
$routes->get('user', 'DashboardController::user', ['filter' => 'role:user']);

$routes->get('user_dashboard/', 'Home::user_dashboard');
$routes->get('admin_dashboard/', 'Home::admin_dashboard');
$routes->get('riwayat_user/', 'Home::riwayat_user');
$routes->get('data_drg/', 'Home::data_drg');
$routes->get('data_pasien/', 'Home::data_pasien');
$routes->get('profil/', 'Home::profil');
$routes->get('faq/', 'Home::faq');
$routes->get('contact/', 'Home::contact');



