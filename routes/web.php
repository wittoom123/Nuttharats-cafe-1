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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/', 'IndexController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product', 'ProductController@front')->name('product');
Route::get('/user', 'UserController@front')->name('UserControllersss');
//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
//Route for admin
Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin/dashboard', 'AdminController@index')->name('admin');



    //category
    Route::get('/admin/category', 'CategoryController@index');
    Route::post('/admin/category/create', 'CategoryController@create')->name('create');
    Route::get('/admin/category/edit/{id}', 'CategoryController@edit');
    //product
    Route::get('/admin/product', 'ProductController@index')->name('product');
    Route::post('/admin/product/create', 'ProductController@create')->name('create.P');
    Route::get('/admin/product/edit/{id}', 'ProductController@edit');
    Route::post('/admin/product/update/{id}', 'ProductController@update');
    Route::get('/admin/product/delete/{id}', 'ProductController@delete');
    //product_introduction
    Route::get('/admin/product_introduction', 'Product_introductionController@index')->name('product_introduction');
    Route::post('/admin/product_introduction/create', 'Product_introductionController@create')->name('create.i');
    Route::get('/admin/product_introduction/edit/{id}', 'Product_introductionController@edit');
    Route::post('/admin/product_introduction/update/{id}', 'Product_introductionController@update');
    Route::get('/admin/product_introduction/delete/{id}', 'Product_introductionController@delete');
    //User
    Route::get('/admin/user','UserController@index')->name('user');
    Route::get('/admin/user/delete/{id}', 'UserController@delete')->name('user.delete');
    Route::get('/admin/user/{id}', 'UserController@edit')->name('user.edit');
    Route::post('/admin/user/{id}', 'UserController@update')->name('user.update');
    //address
    Route::get('/admin/address', 'AddressController@index')->name('address');
    Route::post('/admin/address/create', 'AddressController@create')->name('create.a');
    Route::get('/admin/address/edit/{id}', 'AddressController@edit');
    Route::post('/admin/address/update/{id}', 'AddressController@update');
    Route::get('/admin/address/delete/{id}', 'AddressController@delete');
    //coffee_history
    Route::get('/admin/coffee_history', 'Coffee_historyController@index')->name('coffee_history');
    Route::post('/admin/coffee_history/create', 'Coffee_historyController@create')->name('create.h');
    Route::get('/admin/coffee_history/edit/{id}', 'Coffee_historyController@edit');
    Route::post('/admin/coffee_history/update/{id}', 'Coffee_historyController@update');
    Route::get('/admin/coffee_history/delete/{id}', 'Coffee_historyController@delete');
});
