<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::store');
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::authenticate');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/authors', 'AuthorController::index');
$routes->get('/authors/create', 'AuthorController::create');
$routes->post('/authors/store', 'AuthorController::store');
$routes->get('/authors/edit/(:num)', 'AuthorController::edit/$1');
$routes->post('/authors/update/(:num)', 'AuthorController::update/$1');
$routes->get('/authors/delete/(:num)', 'AuthorController::delete/$1');


