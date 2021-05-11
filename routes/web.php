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

Route::get('/', 'SiteController@index')->name('index');
Route::get('/Service', 'SiteController@service')->name('service');

Route::namespace('Admin')->name('admin.')->prefix('/dashboard')->group(function(){
    Route::get('/', function(){
        return view('admin.index');
    });

});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
