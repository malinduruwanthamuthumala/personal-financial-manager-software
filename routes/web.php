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
Route::get('/investment','InvestmentController@index');
Route::get('/create','InvestmentController@create');
Route::get('/addproduct','productController@index');
Route::get('/getproduct','productController@getproducts');
Route::get('/submitproduct','productController@submitproduct');
Route::get('/deleteproduct','productController@deleteproduct');