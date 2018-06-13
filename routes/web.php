<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/about', function () {
//    return view('welcome');
    $name = ['jelly', 'name2', 'name3', 'name4',];
    return view('sites.about')->with('people', $name);
});


Route::group(['prefix' => 'web'], function () {
    Route::get("/index", "web\jumpController@index");
    Route::get("/returnUser", "web\jumpController@returnUser");
    Route::get("/returnParam/{id}", "web\jumpController@returnParam");
    Route::get("/from", "web\jumpController@from");
});
