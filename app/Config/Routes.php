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
$routes->get('/forgot', 'Home::forgot');
$routes->post('/postforgot', 'Home::postforgot');
$routes->get('/reset', 'Home::reset');
$routes->post('/postreset', 'Home::postreset');