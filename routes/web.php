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

Route::get('/crud/ready_made_sub/{mainId}', 'CRUD\ReadymadeSubController@index');
Route::get('/crud/readymade_sub/view', 'CRUD\ReadymadeSubController@indexView');

Route::post('/crud/readymade_sub/create', 'CRUD\ReadymadeSubController@create');
Route::post('/crud/readymade_sub/view/update', 'CRUD\ReadymadeSubController@update');
Route::post('/crud/readymade_sub/view/delete', 'CRUD\ReadymadeSubController@delete');
