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

//  PUBLICATIONS
Route::prefix('publications')->group(function () {
    Route::get('/', 'Api\PublicationController@index');
    Route::get('/{publication}', 'Api\PublicationController@show');
    Route::post('/', 'Api\PublicationController@create');
    Route::put('/{publication}', 'Api\PublicationController@update');
    Route::delete('/{publication}', 'Api\PublicationController@delete');
});

//  USERS
Route::prefix('users')->group(function () {
    Route::get('/', 'Api\UserController@index');
    Route::get('/{user}', 'Api\UserController@show');
    Route::post('/', 'Api\UserController@create');
    Route::put('/{user}', 'Api\UserController@update');
    Route::delete('/{user}', 'Api\UserController@destroy');
});

// CATEGORIES
Route::prefix('categories')->group(function () {
    Route::get('/', 'Api\CategoryController@index');
    Route::get('/{category}', 'Api\CategoryController@show');
});