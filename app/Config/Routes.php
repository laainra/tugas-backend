<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('insertproduct', 'ProductController::insertPage');
$routes->get('readproduct', 'ProductController::readProducts');
$routes->get('edit-product/(:any)', 'ProductController::getProduct/$1');
$routes->post('edit-product/(:any)', 'ProductController::updateProduct/$1');
$routes->get('delete-product/(:any)', 'ProductController::deleteProduct/$1');
$routes->post('insertproduct', 'ProductController::insertProductORM');
$routes->get('store', 'StoreController::index');
$routes->get('insertstore', 'StoreController::insertPage');
$routes->post('insertstore', 'StoreController::insertStore');
$routes->get('edit-store/(:any)', 'StoreController::getStore/$1');
$routes->post('edit-store/(:any)', 'StoreController::updateStore/$1');
$routes->get('delete-store/(:any)', 'StoreController::deleteStore/$1');

// Movie Watchlist

$routes->get('/movie', 'MovieController::index');
$routes->get('/movie/create', 'MovieController::create');
$routes->post('/movie/store', 'MovieController::store');
$routes->get('/movie/edit/(:any)', 'MovieController::edit/$1');
$routes->post('/movie/update/(:any)', 'MovieController::update/$1');
$routes->get('/movie/delete/(:any)', 'MovieController::delete/$1');

//api

$routes->group('api',function($routes){
    $routes->get('products', 'ProductController::readProductsApi');
    $routes->get('product/(:any)', 'ProductController::getProductApi/$1');
});