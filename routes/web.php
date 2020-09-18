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

Route::get('/vehicle-management', function () {
    return view('vehicle-management');
});

/*Route::get('/vehicle-finance', function () {
    return view('vehicle-finance');
});*/

Route::get('/crud/retail_customer','CRUD\RetailCustomerController@index');
Route::post('/crud/retail_customer/update', 'CRUD\RetailCustomerController@update');
Route::post('/crud/retail_customer/create', 'CRUD\RetailCustomerController@create');
Route::post('/crud/retail_customer/delete', 'CRUD\RetailCustomerController@delete');


Route::get('/crud/vehicle_finance','CRUD\vehicleFinanceController@index');
Route::post('/crud/vehicle_finance/create','CRUD\vehicleFinanceController@create');
Route::post('/crud/vehicle_finance/update', 'CRUD\vehicleFinanceController@update');
Route::post('/crud/vehicle_finance/delete', 'CRUD\vehicleFinanceController@delete');

//Route::get('/crud/vehicle', 'CRUD\vehicleController@index');
//Route::post('/crud/vehicle/create', 'CRUD\vehicleController@create');
//Route::post('/crud/vehicle/update', 'CRUD\vehicleController@update');
//Route::post('/crud/vehicle/delete', 'CRUD\vehicleController@delete');


