<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/about', 'HomeController::about');
$routes->get('/contact', 'HomeController::contact');
$routes->get('/mobil/detail/(:num)', 'MobilController::detail/$1');

$routes->get('/login', 'LoginController::login');   // tampilkan form login
$routes->post('/login', 'LoginController::doLogin');      // proses login
$routes->post('/logout', 'LoginController::logout');     // logout
