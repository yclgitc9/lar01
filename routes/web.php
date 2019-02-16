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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('buyers', 'Buyer\BuyerController');
Route::resource('categories', 'Category\CategoryController');
Route::resource('products', 'Product\ProductController');
Route::resource('sellers', 'Seller\SellerController');
Route::resource('transactions', 'Transaction\TransactionController');
Route::resource('users', 'User\UserController');