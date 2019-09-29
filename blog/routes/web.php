<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/view','ViewController@pangpang');

Route::any('login','Admin\LoginController@login');

Route::group(['prefix' => 'admin','namespace'=>'Admin','middleware'=>'web'], function () {
    Route::get("index",'IndexController@index');
    Route::get("code",'LoginController@code');
    Route::get("crypt","LoginController@crypt");
    Route::resource('article','ArticleController');
});
