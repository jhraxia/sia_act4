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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//unsecure routes
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users',['uses' => 'UserController@getUsers']);
});

// More simple routes
$router->get('/CustomerList',['uses' => 'UserController@index']);

$router->post('/AddCustomer', 'UserController@addUsers'); // create new user record

$router->get('/GetCustomer/{id}', 'UserController@showUsers'); // get user by id

$router->put('/UpdateCustomer/{id}', 'UserController@updateUsers'); // update user record

$router->patch('/UpdateCustomer/{id}', 'UserController@updateUsers'); // update user record

$router->delete('/DeleteCustomer/{id}', 'UserController@deleteUsers'); // delete record 
