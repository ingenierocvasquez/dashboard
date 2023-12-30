<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PageController::index');
$routes->get('dashboard', 'PageController::DashboardFunction');
$routes->get('user', 'UserController::index');

//Formaciones
$routes->get('education', 'EducationController::index');
$routes->get('education/(:num)', 'EducationController::show/$1');
$routes->get('education/new', 'EducationController::new');
$routes->post('education/create', 'EducationController::create');
$routes->get('education/edit/(:num)', 'EducationController::edit/$1');
$routes->post('education/update/(:num)', 'EducationController::update/$1');
$routes->post('education/delete/(:num)', 'EducationController::delete/$1');

service('auth')->routes($routes);
