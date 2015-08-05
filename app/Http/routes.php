<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
                       'auth'     => 'Auth\AuthController',
                       'password' => 'Auth\PasswordController',
                   ]);
// Global Patterns
Route::pattern('id', '[0-9]+');
// Frontend
Route::get('/', 'IndexController@index');
Route::get('/about', 'UserController@about');
Route::get('home', 'HomeController@index');
Route::get('/articles', 'ArticleController@all');
Route::get('/article/{id}', 'ArticleController@show');
Route::get('/category/{id}', 'CategoryController@show');
Route::get('/comment', 'CommentController@comment');

// Authentication routes...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');
//
//// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');
// End Of Frontend

// Backend
Route::group(['prefix' => 'backend'], function () {
    Route::get('/article/create', 'Backend\ArticleController@create');
    Route::get('/article/edit/{id}', 'Backend\ArticleController@edit');
    Route::get('/articles', 'Backend\ArticleController@all');
    //Route::get('/category/create', 'Backend\CategoryController@create');
    //Route::get('/category/eidt/{id}', 'Backend\CategoryController@edit');
    Route::get('/categories', 'Backend\CategoryController@all');
    Route::get('/signin', 'Backend\UserController@signin');
    Route::get('/signup', 'Backend\UserController@signup');
    Route::get('/user/{id}', 'Backend\UserController@ucenter');

    Route::post('/article/create', 'Backend\ArticleController@store');
    Route::post('/article/edit/{id}', 'Backend\ArticleController@update');
    Route::post('/article/del/{id}', 'Backend\ArticleController@del');
    Route::post('/category/create', 'Backend\CategoryController@store');
    Route::post('/category/edit/{id}', 'Backend\CategoryController@update');
    Route::post('/category/del/{id}', 'Backend\CategoryController@del');
});
// End Of Backend

