<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\AdminController;
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

$router->get('/key', function () {
    return \Illuminate\Support\Str::random(32);
});
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showuser', 'UserController@showAllUser');
    $router->get('showoneuser/{username}', 'UserController@findOneUser');
    $router->put('updateuser/{id}', 'UserController@updateUser');
    $router->post('createduser', 'UserController@createdUser');
    $router->delete('deluser/{id}', 'UserController@deleteUser');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showartcat', 'ArticleCategoryController@showAllArticleCategory');
    $router->get('showoneartcat/{id}', 'ArticleCategoryController@showOne');
    $router->put('updateartcat/{id}', 'ArticleCategoryController@updateArtCAt');
    $router->post('createartcat', 'ArticleCategoryController@createArtCAt');
    $router->delete('deletedartcat/{id}', 'ArticleCategoryController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showanswer', 'AnswerKeyController@showAllAnswerKey');
    $router->get('showoneanswer/{id}', 'AnswerKeyController@showOne');
    $router->put('updateanswer/{id}', 'AnswerKeyController@update');
    $router->post('createanswer', 'AnswerKeyController@createAnswerKey');
    $router->delete('deleteanswer/{id}', 'AnswerKeyController@delete');
});
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showartcont', 'ArticleContentController@showAllArticle');
    $router->get('showoneartcont/{id}', 'ArticleContentController@showOne');
    $router->put('updateartcont/{id}', 'ArticleContentController@updateArticle');
    $router->post('createartcont', 'ArticleContentController@createdArticle');
    $router->delete('deleteartcont/{id}', 'ArticleContentController@delete');
});
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showmaster', 'MasterTestController@showAll');
    $router->get('showonemaster/{id}', 'MasterTestController@showOne');
    $router->put('updatemaster/{id}', 'MasterTestController@update');
    $router->post('createmaster', 'MasterTestController@create');
    $router->delete('deletemaster/{id}', 'MasterTestController@delete');
});
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showmatrik', 'MatrikController@showAll');
    $router->get('showonematrik/{id}', 'MatrikController@showOne');
    $router->put('updatematrik/{id}', 'MatrikController@update');
    $router->post('creatematrik', 'MatrikController@create');
    $router->delete('deletematrik/{id}', 'MatrikController@delete');
});
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showpollcat', 'PollCategoryController@showAll');
    $router->get('showonepollcat/{id}', 'PollCategoryController@showOne');
    $router->put('updatepollcat/{id}', 'PollCategoryController@update');
    $router->post('createpollcat', 'PollCategoryController@create');
    $router->delete('deletepollcat/{id}', 'PollCategoryController@delete');
});
$router->group(['prefix' => 'api'], function () use ($router) { //sudh
    $router->get('showadmin', 'AdminController@showAll');
    $router->get('showoneadmin/{id}', 'AdminController@showOne');
    $router->put('updateadmin/{id}', 'AdminController@update');
    $router->post('createadmin', 'AdminController@create');
    $router->delete('deleteadmin/{id}', 'AdminController@delete');
    $router->post('admin/login', 'AdminController@loginAdmin');
    $router->post('admin', 'AdminController@showAdmin');
    $router->put('updatepassword', 'AdminController@updatePassword');
    $router->put('updateall/{id}', 'AdminController@updateAllAdm');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showstatus', 'EmployeeStatusController@showAll');
    $router->get('showonestatus/{id}', 'EmployeeStatusController@showOne');
    $router->put('updatestatus/{id}', 'EmployeeStatusController@updateStatus');
    $router->post('createstatus', 'EmployeeStatusController@createStatus');
    $router->delete('deletestatus/{id}', 'EmployeeStatusController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showcategori', 'TrainingCategoryController@showAll');
    $router->get('showonecategori/{id}', 'TrainingCategoryController@showOne');
    $router->put('updatecategory/{id}', 'TrainingCategoryController@update');
    $router->post('createcategory', 'TrainingCategoryController@create');
    $router->delete('deletecategory/{id}', 'TrainingCategoryController@delete');
});