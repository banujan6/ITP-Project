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
    return view('index');
});

Route::get('/crud/retail_customer','CRUD\RetailCustomerController@index');
Route::post('/crud/retail_customer/update', 'CRUD\RetailCustomerController@update');
Route::post('/crud/retail_customer/create', 'CRUD\RetailCustomerController@create');
Route::post('/crud/retail_customer/delete', 'CRUD\RetailCustomerController@delete');

Route::get('/crud/wholesale','CRUD\WholesaleCustomerController@index');
Route::post('/crud/wholesale/update', 'CRUD\WholesaleCustomerController@update');
Route::post('/crud/wholesale/create', 'CRUD\WholesaleCustomerController@create');
Route::post('/crud/wholesale/delete', 'CRUD\WholesaleCustomerController@delete');

