<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\UserController;

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
$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router){
    $router->get('showuser', 'UserController@showAllUser');
    $router->get('showoneuser/{username}', 'UserController@findOneUser');
    $router->put('updateuser/{id}', 'UserController@updateUser');
    $router->post('createduser', 'UserController@createdUser');
    $router->delete('deluser/{id_user}', 'UserController@deleteUser');
});