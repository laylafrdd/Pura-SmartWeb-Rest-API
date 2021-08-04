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
    $router->get('showuserbyname/{name}', 'UserController@findUsersByName');
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
    $router->get('showanswerkey', 'AnswerKeyController@showAllAnswerKey');
    $router->get('showoneanswerkey/{id}', 'AnswerKeyController@showOne');
    $router->put('updateanswerkey/{id}', 'AnswerKeyController@update');
    $router->post('createanswerkey', 'AnswerKeyController@createAnswerKey');
    $router->delete('deleteanswerkey/{id}', 'AnswerKeyController@delete');
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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showresult', 'PollResultController@showAll');
    $router->get('showoneresult/{id}', 'PollResultController@showOne');
    $router->put('updateresult/{id}', 'PollResultController@update');
    $router->post('createresult', 'PollResultController@create');
    $router->delete('deleteresult/{id}', 'PollResultController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showhistory', 'HistoryTrainingController@showAll');
    $router->get('showonehistory/{id}', 'HistoryTrainingController@showOne');
    $router->put('updatehistory/{id}', 'HistoryTrainingController@update');
    $router->post('createhistory', 'HistoryTrainingController@create');
    $router->delete('deletehistory/{id}', 'HistoryTrainingController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showpollcontent', 'PollingContentController@showAll');
    $router->get('showpollcontent/{id}', 'PollingContentController@showOne');
    $router->put('updatepollcontent/{id}', 'PollingContentController@update');
    $router->post('createpollcontent', 'PollingContentController@create');
    $router->delete('deletepollcontent/{id}', 'PollingContentController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showtraicontent', 'TrainingContentController@showAll');
    $router->get('showtraicontent/{id}', 'TrainingContentController@showOne');
    $router->put('updatetraicontent/{id}', 'TrainingContentController@update');
    $router->post('createtraicontent', 'TrainingContentController@create');
    $router->delete('deletetraicontent/{id}', 'TrainingContentController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showanswer', 'UserAnswerController@showAll');
    $router->get('showanswer/{id}', 'UserAnswerController@showOne');
    $router->put('updateanswer/{id}', 'UserAnswerController@update');
    $router->post('createanswer', 'UserAnswerController@create');
    $router->delete('deleteanswer/{id}', 'UserAnswerController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showpollops', 'PollingOptionController@showAll');
    $router->get('showpollops/{id}', 'PollingOptionController@showOne');
    $router->put('updatepollops/{id}', 'PollingOptionController@update');
    $router->post('createpollops', 'PollingOptionController@create');
    $router->delete('deletepollops/{id}', 'PollingOptionController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showtestops', 'TestOptionController@showAll');
    $router->get('showtestops/{id}', 'TestOptionController@showOne');
    $router->put('updatetestops/{id}', 'TestOptionController@update');
    $router->post('createtestops', 'TestOptionController@create');
    $router->delete('deletetestops/{id}', 'TestOptionController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showval', 'ValuationController@showAll');
    $router->get('showval/{id}', 'ValuationController@showOne');
    $router->put('updateval/{id}', 'ValuationController@update');
    $router->post('createval', 'ValuationController@create');
    $router->delete('deleteval/{id}', 'ValuationController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showtq', 'TestQuestionController@showAll');
    $router->get('showtq/{id}', 'TestQuestionController@showOne');
    $router->put('updatetq/{id}', 'TestQuestionController@update');
    $router->post('createtq', 'TestQuestionController@create');
    $router->delete('deletetq/{id}', 'TestQuestionController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showtrnf', 'TrainingFeedbackController@showAll');
    $router->get('showtrnf/{id}', 'TrainingFeedbackController@showOne');
    $router->put('updatetrnf/{id}', 'TrainingFeedbackController@update');
    $router->post('createtrnf', 'TrainingFeedbackController@create');
    $router->delete('deletetrnf/{id}', 'TrainingFeedbackController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showtref', 'TrainerFeedbackController@showAll');
    $router->get('showtref/{id}', 'TrainerFeedbackController@showOne');
    $router->put('updatetref/{id}', 'TrainerFeedbackController@update');
    $router->post('createtref', 'TrainerFeedbackController@create');
    $router->delete('deletetref/{id}', 'TrainerFeedbackController@delete');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('showrv', 'RegulationVideoController@showAll');
    $router->get('showrv/{id}', 'RegulationVideoController@showOne');
    $router->put('updaterv/{id}', 'RegulationVideoController@update');
    $router->post('createrv', 'RegulationVideoController@create');
    $router->delete('deleterv/{id}', 'RegulationVideoController@delete');
});