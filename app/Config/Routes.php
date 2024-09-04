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

$routes->get('/books', 'BookController::index');
$routes->get('/books/create', 'BookController::create');
$routes->post('/books/store', 'BookController::store');
$routes->get('/books/edit/(:num)', 'BookController::edit/$1');
$routes->post('/books/update/(:num)', 'BookController::update/$1');
$routes->get('/books/delete/(:num)', 'BookController::delete/$1');

$routes->get('/loans', 'LoanController::index');
$routes->get('/loans/create', 'LoanController::create');
$routes->post('/loans/store', 'LoanController::store');
$routes->get('/loans/edit/(:num)', 'LoanController::edit/$1');
$routes->post('/loans/update/(:num)', 'LoanController::update/$1');
$routes->get('/loans/delete/(:num)', 'LoanController::delete/$1');


