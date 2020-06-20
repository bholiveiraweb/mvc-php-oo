<?php

use App\Core\Router;

Router::base(BASE_URL);

/**
 *  ---------------------------------------------
 *  Public Routes
 *  ---------------------------------------------
 */
Router::namespace('App\Resources');

Router::get('/', 'Welcome::index');
Router::get('/dashboard', 'Welcome::dashboard');
Router::post('/dashboard', 'Welcome::dashboard');

Router::get('/product', 'Product::index');

/**
 *  ---------------------------------------------
 *  404 Error Handler
 * ----------------------------------------------
 */
Router::namespace('App\Resources\Errors');
Router::get('/error/404', 'Error404::index');

if (Router::error()['404']) {
    Router::redirect('/error/404');
}
