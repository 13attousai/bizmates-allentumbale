<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\Home\Controllers\HomeController::class, 'index'])->name('home');
Route::get('destinations', [\Home\Controllers\HomeController::class, 'destinations'])->name('destinations');
Route::get('/{page}', [\Home\Controllers\HomeController::class, 'loadPage'])->name('load_page');

Route::group(['prefix' => 'articles', 'as' => 'articles.'], function () {
    Route::get('list', array('as' => 'list', 'uses' => '\Articles\Controllers\ArticlesController@list'));
});

Route::group(['prefix' => 'interests', 'as' => 'interests.'], function () {
    Route::post('list', array('as' => 'list', 'uses' => '\Interests\Controllers\InterestsController@list'));
});


Route::group(['prefix' => 'destinations', 'as' => 'destinations.'], function () {
    Route::get('list', array('as' => 'list', 'uses' => '\Destinations\Controllers\DestinationsController@list'));
});
