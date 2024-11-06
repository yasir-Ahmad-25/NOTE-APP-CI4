<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->match(['GET','POST'],'/register', 'Home::Register');
$routes->match(['GET','POST'],'/Login', 'Home::Login');
$routes->post('/', 'Home::createNote');
$routes->match(['GET','POST'],'/note/(:any)', 'Home::updateNote/$1');
$routes->get('/delete/(:any)', 'Home::DeleteNote/$1');
$routes->match(['GET','POST'], 'Logout', 'Home::Logout');
// $routes->match(['GET','POST'],'/', 'Home::updateNote/$1');
