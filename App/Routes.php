<?php

use Core\Router;

$router = new Router;

//-- Public Routes
$router->namespace('App\Controllers');

$router->get('/', 'WelcomeController@index');
$router->get('/dashboard', 'WelcomeController@dashboard');
$router->get('/product', 'ProductController@index');

//-- 404 Error Handler
$router->namespace('App\Controllers\Errors');
$router->get('/error/404', 'Error404Controller@index');

if ($router->error()['404']) {
    $router->redirect('/error/404');
}
