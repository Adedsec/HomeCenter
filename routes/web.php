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

Route::get('/', 'HomeController@main')->name('show.main');

Auth::routes();

Route::get('/home', 'HomeController@main')->name('home');

// Cases Routes

Route::get('cases/create', 'EstateController@create')->name('Estate.create');
Route::get('cases/search', 'EstateController@search')->name('Estate.search');
Route::get('/cases/{category}', 'EstateController@index')->name('Estate.index');
Route::get('cases/show/{id}', 'EstateController@show')->name('Estate.show');
Route::get('/cases/edit/{estate}', 'EstateController@edit')->name('Estate.edit');
Route::post('/cases', 'EstateController@store')->name('Estate.store');
Route::put('/cases/{estate}', 'EstateController@update')->name('Estate.update');
Route::get('/cases/delete/{estate}', 'EstateController@delete')->name('Estate.delete');

//category Routes

Route::get('/categories', 'CategoryController@index')->name('Category.index');
Route::post('/categories', 'CategoryController@store')->name('Category.store');
Route::put('/categories', 'CategoryController@update')->name('Category.update');
Route::delete('/categories/{id}', 'CategoryController@delete')->name('Category.delete');


//Owners Routes

Route::get('owners/create', 'OwnerController@create')->name('Owner.create');
Route::get('/owners', 'OwnerController@index')->name('Owner.index');
Route::post('/owners', 'OwnerController@store')->name('Owner.store');
Route::get('/owners/edit/{owner}', 'OwnerController@edit')->name('Owner.edit');
Route::put('/owners/{owner}', 'OwnerController@update')->name('Owner.update');
Route::delete('/owners/{id}', 'OwnerController@delete')->name('Owner.delete');
Route::get('owners/search', 'OwnerController@search')->name('Owner.search');


//Customers Routes

Route::get('customers/create', 'CustomerController@create')->name('Customer.create');
Route::get('/customers', 'CustomerController@index')->name('Customer.index');
Route::get('/customers/edit/{customer}', 'CustomerController@edit')->name('Customer.edit');
Route::post('/customers', 'CustomerController@store')->name('Customer.store');
Route::put('/customers/{customer}', 'CustomerController@update')->name('Customer.update');
Route::delete('/customers/{id}', 'CustomerController@delete')->name('Customer.delete');
Route::get('customers/search', 'CustomerController@search')->name('Customer.search');

//Orders Routes

Route::get('orders', 'OrderController@index')->name('Order.index');
Route::get('order/create/{estate}', 'OrderController@create')->name('Order.create');
Route::get('orders/{order}', 'OrderController@show')->name('Order.show');
Route::post('order', 'OrderController@store')->name('Order.store');
Route::delete('/order/{order}', 'OrderController@delete')->name('Order.delete');
