<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ShoeCollectionController::index');
$routes->get('/home', 'ShoeCollectionController::index');
$routes->get('/about', 'ShoeCollectionController::aboutShop');
$routes->get('/blog', 'ShoeCollectionController::blog');
$routes->get('/contact', 'ShoeCollectionController::contact');
$routes->get('/cart', 'ShoeCollectionController::cart');
$routes->get('/shop', 'ShoeCollectionController::shop');
$routes->get('/single-product', 'ShoeCollectionController::singleProd');
$routes->get('/checkout', 'ShoeCollectionController::checkout');