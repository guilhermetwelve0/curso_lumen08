<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
$router->get('/', 'Home@index');
$router->get('/post/{slug}', 'Post@show');
$router->get('/login', 'Login@index');
$router->post('/login', 'Login@store');
$router->get('/logout', 'Login@destroy');
$router->get('/protect',['middleware' => 'loggedIn', 'uses' => 'Protect@index']);

