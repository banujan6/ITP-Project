<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller\CRUD;
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

Route::get('/crud/ready_made_sub/{mainId}', 'CRUD\ReadymadeSubController@index')->name('readymade.sub.index');
Route::get('/crud/readymade_sub/view', 'CRUD\ReadymadeSubController@indexView');

Route::post('/crud/readymade_sub/create', 'CRUD\ReadymadeSubController@create');
Route::post('/crud/readymade_sub/view/update', 'CRUD\ReadymadeSubController@update');
Route::post('/crud/readymade_sub/view/delete', 'CRUD\ReadymadeSubController@delete');

Route::get('/crud/wholesale_transaction','CRUD\WholesaleTransactionController@index');
Route::post('/crud/wholesale_transaction/create','CRUD\WholesaleTransactionController@create');
Route::post('/crud/wholesale_transaction/update','CRUD\WholesaleTransactionController@update');
Route::post('/crud/wholesale_transaction/delete','CRUD\WholesaleTransactionController@delete');

Route::get('/crud/retail_transaction','CRUD\RetailTransactionController@index');
Route::post('/crud/retail_transaction/create','CRUD\RetailTransactionController@create');
Route::post('/crud/retail_transaction/update','CRUD\RetailTransactionController@update');
Route::post('/crud/retail_transaction/delete','CRUD\RetailTransactionController@delete');

Route::get('/supplier','SupplierController@index');
Route::post('/supplier/update','SupplierController@update');
Route::post('/supplier/create','SupplierController@create');
Route::post('/supplier/delete','SupplierController@delete');

Route::get('/categories', 'CRUD\CategoryController@index');
Route::get('/categories/bottoms', 'CRUD\BottomsController@index');
Route::get('/categories/ready-made', 'CRUD\ReadyMadeController@index')->name('category.ready-made.index');
Route::post('/categories/ready-made', 'CRUD\ReadyMadeController@store')->name('category.ready-made.store');
