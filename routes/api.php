<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    //  PUBLICATIONS
    Route::prefix('publications')->group(function () {
        Route::get('/', 'Api\PublicationController@index');
        Route::get('/freePubli', 'Api\PublicationController@showFree');
        Route::get('/{id}', 'Api\PublicationController@show');
        Route::post('/addPubli', 'Api\PublicationController@store');
        Route::put('/{publication}', 'Api\PublicationController@update');
        Route::delete('/{publication}', 'Api\PublicationController@destroy');
    });

//  USERS
    Route::prefix('users')->group(function () {
        Route::get('/', 'Api\UserController@index');
        Route::get('/{user}', 'Api\UserController@show');
        Route::get('/user', 'Api\UserController@showMe');
        Route::post('/', 'Api\UserController@store');
        Route::put('/{user}', 'Api\UserController@update');
        Route::delete('/{user}', 'Api\UserController@destroy');
    });

// CATEGORIES
    Route::prefix('categories')->group(function () {
        Route::get('/', 'Api\CategoryController@index');
        Route::get('/{category}', 'Api\CategoryController@show');
    });

// COMMENTS
    Route::prefix('comments')->group(function () {
        Route::get('/', 'Api\CommentController@index');
        Route::get('/{comment}', 'Api\CommentController@show');
        Route::post('/{comment}', 'Api\CommentController@store');
        Route::put('/{comment}', 'Api\CommentController@update');
        Route::delete('/{comment}', 'Api\CommentController@destroy');
    });
});

    Route::post('register', 'Auth\RegisterController@registerMobil');
    Route::get('testJavaGet', 'Api\PublicationController@testJavaGet');
    Route::post('testJavaPost', 'Api\PublicationController@testJavaPost');
