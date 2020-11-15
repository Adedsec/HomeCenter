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
    return redirect("/home");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cases/create', 'EstateController@show')->name('Estate.show');
Route::get('/cases/{category}', 'EstateController@index')->name('Estate.index');
Route::get('cases/{id}', 'EstateController@show')->name('Estate.show');
Route::post('/cases', 'EstateController@store')->name('Estate.store');
Route::put('/cases', 'EstateController@update')->name('Estate.update');

Route::get('/customers', function () {
    echo "this is customer Index ";
})->name("Customer.index");

