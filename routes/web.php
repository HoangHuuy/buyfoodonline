<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/do-an', 'ProductController@indexFood')->name('food');
Route::get('/com', 'ProductController@indexRice')->name('rice');
Route::get('/chao', 'ProductController@indexCongee')->name('Congee');
Route::get('/pho', 'ProductController@indexNoodles')->name('noodles');
Route::get('/do-an-vat', 'ProductController@indexSnacks')->name('snacks');
Route::get('/giai-khat', 'ProductController@indexDrinks')->name('drinks');

