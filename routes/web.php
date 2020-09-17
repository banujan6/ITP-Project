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

Route::get('/crud/wholesale_transaction','CRUD\WholesaleTransactionController@index');
Route::post('/crud/wholesale_transaction/create','CRUD\WholesaleTransactionController@create');
Route::post('/crud/wholesale_transaction/update','CRUD\WholesaleTransactionController@update');
Route::post('/crud/wholesale_transaction/delete','CRUD\WholesaleTransactionController@delete');


Route::get('/crud/retail_transaction','CRUD\RetailTransactionController@index');
Route::post('/crud/retail_transaction/create','CRUD\RetailTransactionController@create');
Route::post('/crud/retail_transaction/update','CRUD\RetailTransactionController@update');
Route::post('/crud/retail_transaction/delete','CRUD\RetailTransactionController@delete');
