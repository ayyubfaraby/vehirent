<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/about', 'HomeController::about');
$routes->get('/contact', 'HomeController::contact');
$routes->get('/mobil/detail/(:num)', 'MobilController::detail/$1');

