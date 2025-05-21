<?php

use CodeIgniter\Commands\Utilities\Routes;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->post('/pages/login', 'Pages::login');
$routes->get('/pages/logout', 'Pages::logout');

$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/buku', 'Buku::index');
    $routes->get('/buku/create', 'Buku::create');
    $routes->post('/buku/save', 'Buku::save');
    $routes->delete('/buku/(:num)', 'Buku::delete/$1');
    $routes->get('/buku/edit/(:num)', 'Buku::edit/$1');
    $routes->put('/buku/update/(:num)', 'Buku::update/$1');
});
