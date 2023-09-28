<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ShoeCollectionController::index');
$routes->get('/home', 'ShoeCollectionController::index');
$routes->get('/about', 'ShoeCollectionController::aboutShop');
$routes->get('/blog', 'ShoeCollectionController::aboutShop');