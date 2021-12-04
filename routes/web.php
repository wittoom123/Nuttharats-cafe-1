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
Route::get('product', function () {
    return view('product');
});


//admin
Route::get('/admin/index','AdminController@index')->name('index');
//category
Route::get('/admin/category','CategoryController@index');

Route::get('/admin/category/edit/{id}','CategoryController@edit');
//product
Route::get('/admin/product','ProductController@index');
Route::post('/admin/Product/create','ProductController@create')->name('create.P');
Auth::routes();
//product_introduction
Route::get('/admin/product_introduction','Product_introductionController@index');
Route::post('/admin/product_introduction/create','Product_introductionController@create')->name('create.i');
Auth::routes();
//address
Route::get('/admin/address','AddressController@index');
Route::post('/admin/address/create','AddressController@create')->name('create.a');
Auth::routes();
//coffee_history
Route::get('/admin/coffee_history','Coffee_historyController@index');
Route::post('/admin/coffee_history/create','Coffee_historyController@create')->name('create');
Auth::routes();
//Route for normal user
Route::group(['middleware' => ['auth']], function () {
Route::get('/home', 'HomeController@index')->name('home');
});
//Route for admin
Route::group(['prefix' => 'admin'], function () {
Route::group(['middleware' => ['admin']], function () {
Route::get('/dashboard', 'admin\AdminController@index');
    });
});
