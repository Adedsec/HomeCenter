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

Route::get('/', 'homeController@main')->name('show.main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Cases Routes

Route::get('cases/create', 'EstateController@create')->name('Estate.create');
Route::get('/cases/{category}', 'EstateController@index')->name('Estate.index');
Route::get('cases/{id}', 'EstateController@show')->name('Estate.show');
Route::post('/cases', 'EstateController@store')->name('Estate.store');
Route::put('/cases', 'EstateController@update')->name('Estate.update');

//category Routes

Route::get('/categories', 'CategoryController@index')->name('Category.index');
Route::post('/categories', 'CategoryController@store')->name('Category.store');
Route::put('/categories', 'CategoryController@update')->name('Category.update');
Route::delete('/categories/{id}', 'CategoryController@delete')->name('Category.delete');


//Owners Routes

Route::get('owners/create', 'OwnerController@create')->name('Owner.create');
Route::get('/owners', 'OwnerController@index')->name('Owner.index');
Route::get('owners/{id}', 'OwnerController@show')->name('Owner.show');
Route::post('/owners', 'OwnerController@store')->name('Owner.store');
Route::put('/owners', 'OwnerController@update')->name('Owner.update');

//Customers Routes

Route::get('customers/create', 'CustomerController@create')->name('Customer.create');
Route::get('/customers', 'CustomerController@index')->name('Customer.index');
Route::get('customers/{id}', 'CustomerController@show')->name('Customer.show');
Route::post('/customers', 'CustomerController@store')->name('Customer.store');
Route::put('/customers', 'CustomerController@update')->name('Customer.update');

Route::get('/customers', function () {
    echo "this is customer Index ";
})->name("Customer.index");
