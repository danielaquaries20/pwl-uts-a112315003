<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'DashboardController::dashboard');
$routes->get('/', 'DashboardController::dashboard', ['filter' => 'auth']);
$routes->get('/dashboard', 'DashboardController::dashboard');

$routes->get('/bloglist', 'DashboardController::bloglist', ['filter' => 'auth']);
$routes->get('/blogadd', 'DashboardController::blogadd', ['filter' => 'auth']);
$routes->get('/adminpanel', 'DashboardController::admin_panel', ['filter' => 'auth']);
// $routes->get('/genpass', 'AuthController::genpass');

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

