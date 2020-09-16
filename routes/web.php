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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Middleware Authentication
Route::group(['as'=>'superAdmin.','prefix'=>'superAdmin','namespace'=>'SuperAdmin','middleware'=>['auth','superAdmin']], function(){
	Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
	Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'customer.','prefix'=>'customer','namespace'=>'Customer','middleware'=>['auth','customer']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});