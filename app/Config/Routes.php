<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->post('/postlogin', 'Home::postlogin');
$routes->get('/register', 'Home::register');
$routes->post('/postregister', 'Home::postregister');
$routes->get('/logout', 'Home::logout');
