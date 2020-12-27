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
    return redirect()->route('home');
});

Route::get('/contact', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/categories','App\Http\Controllers\categoryController');
Route::resource('/products','App\Http\Controllers\productController');
Route::resource('/roles','App\Http\Controllers\roleController');
Route::get('/search','App\Http\Controllers\productController@search')->name('product.search');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/cart','App\Http\Controllers\cartController');
Route::resource('/orders','App\Http\Controllers\orderController');
Route::post('/card-add','App\Http\Controllers\cartController@add')->name('cart.add');
Route::get('/card-checkout','App\Http\Controllers\cartController@checkout')->name('cart.checkout')->middleware('auth');
Route::get('/userOrder','App\Http\Controllers\orderController@userOrder')->name('orders.userOrder');