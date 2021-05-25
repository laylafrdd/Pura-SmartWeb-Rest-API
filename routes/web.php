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

$router->group(['prefix' => 'apiUser'], function () use ($router){
    $router->get('showuser', 'UserController@showAllUser');
    $router->get('showoneuser/{username}', 'UserController@findOneUser');
    $router->put('updateuser/{id}', 'UserController@updateUser');
    $router->post('createduser', 'UserController@createdUser');
    $router->delete('deluser/{id_user}', 'UserController@deleteUser');
});

$router->group(['prefix' => 'apiArticleCat'], function () use ($router){
    $router->get('showartcat', 'ArticleCategoryController@showAllArticleCategory');
    $router->get('showone/{id}', 'ArticleCategoryController@showOne');
    $router->put('update/{id}', 'ArticleCategoryController@updateArtCAt');
    $router->post('createartcat', 'ArticleCategoryController@createArtCAt');
    $router->delete('deleted/{id}', 'ArticleCategoryController@delete');
});

$router->group(['prefix' => 'apiAnswer'], function () use ($router){
    $router->get('show', 'AnswerKeyController@showAllAnswerKey');
    $router->get('showone/{id}', 'AnswerKeyController@showOne');
    $router->put('update/{id}', 'AnswerKeyController@update');
    $router->post('create', 'AnswerKeyController@createAnswerKey');
    $router->delete('delete/{id}', 'AnswerKeyController@delete');
});
$router->group(['prefix' => 'apiArticle'], function () use ($router){
    $router->get('show', 'ArticleContentController@showAllArticle');
    $router->get('showone/{id}', 'ArticleContentController@showOne');
    $router->put('update/{id}', 'AnswerKeyController@update');
    $router->post('create', 'ArticleContentController@createdArticle');
    $router->delete('delete/{id}', 'AnswerKeyController@delete');
});