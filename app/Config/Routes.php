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
$routes->get('insertstore', 'StoreController::insertStore');
$routes->post('insertstore/insert', 'StoreController::insertStore');
