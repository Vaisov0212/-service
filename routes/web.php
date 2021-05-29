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
Route::get('/Market/{category}','SiteController@shop')->name('market');
Route::get('/Contact-us','SiteController@conatct')->name('contact');
Route::post('/messege','SiteController@contactsef')->name('messege')->middleware('user');

// swichtLang
Route::get('lang/{lang}','SiteController@switchLang')->name('switch.Lang');
Route::get('/Market/{category}/{id}','SiteController@shop_show')->name('market-show')->where(['id' => '[0-9]+', 'nameid' => '[0-9]+']);

Route::namespace('Admin')->middleware('admin')->name('admin.')->prefix('/dashboard')->group(function(){
    Route::get('/', function(){
        return view('admin.index');
    });

    Route::resource('/feedback','FeedbackController');
    Route::resource('/profile','ProfileController');
    Route::resource('/market','ShopController');
    Route::resource('/contact-us','ContactController');

});
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
