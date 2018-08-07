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

Route::get('/', 'MainController@showMain')->name('main');


Route::get('contact', 'MainController@showContact')->name('contact');
Route::get('demo', 'MainController@showDemo')->name('demo');
Route::get('cart', 'GuitarController@showCart')->name('cart');
Route::get('guitars', 'GuitarController@showGuitars')->name('guitars');
Route::get('admin', 'MainController@showAdmin')->name('admin');
Route::get('aboutus', 'MainController@showAboutus')->name('aboutus');
Route::get('login', 'RegisterController@showLogin')->name('login');
Route::get('register', 'RegisterController@showRegister')->name('register');
Route::get('buy', 'BuyerController@showBuy')->name('buy');


Route::post('admin', 'GuitarController@adminGuitars')->name('adminGuitars');
Route::post('guitars', 'GuitarController@addGuitar');
Route::post('cart', 'GuitarController@remove');
Route::post('buy', 'BuyerController@buy');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
