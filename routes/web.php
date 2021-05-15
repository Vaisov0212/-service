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

use App\Feddback;

Route::get('/', 'SiteController@index')->name('index');
Route::get('/About-us', 'SiteController@about_us')->name('aboutUs');
Route::get('/Service', 'SiteController@service')->name('service');
Route::post('/Reference','SiteController@reference')->name('reference')->middleware('user');

Route::namespace('Admin')->middleware('admin')->name('admin.')->prefix('/dashboard')->group(function(){
    Route::get('/', function(){
        return view('admin.index');
    });

    Route::resource('/feedback','FeedbackController');
    Route::resource('/profile','ProfileController');

});
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
