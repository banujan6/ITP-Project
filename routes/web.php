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
Route::get('/crud/readymade_sub/view/{subId}', 'CRUD\ReadymadeSubController@indexView');
Route::post('/crud/ready_made_sub/fileUpload', 'CRUD\ReadymadeSubController@fileUpload');


Route::post('/crud/readymade_sub/create', 'CRUD\ReadymadeSubController@create');
Route::post('/crud/readymade_sub/view/update', 'CRUD\ReadymadeSubController@update');
Route::post('/crud/readymade_sub/view/delete', 'CRUD\ReadymadeSubController@delete');
Route::post('/crud/readymade_sub/view/fileUpload', 'CRUD\ReadymadeSubController@fileUpload');

Route::post('/crud/fabric_sub/create', 'CRUD\ReadymadeSubController@create');
Route::post('/crud/fabric_sub/view/update', 'CRUD\ReadymadeSubController@update');
Route::post('/crud/fabric_sub/view/delete', 'CRUD\ReadymadeSubController@delete');
Route::post('/crud/v/view/fileUpload', 'CRUD\ReadymadeSubController@fileUpload');

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

Route::get('/crud/supplier_transaction','CRUD\SupplierTransactionController@index');
Route::post('/crud/supplier_transaction/create','CRUD\SupplierTransactionController@create');
Route::post('/crud/supplier_transaction/update','CRUD\SupplierTransactionController@update');
Route::post('/crud/supplier_transaction/delete','CRUD\SupplierTransactionController@delete');

Route::get('/categories', 'CRUD\CategoryController@index');
Route::get('/categories/ready-made', 'CRUD\ReadyMadeController@index')->name('category.ready-made.index');
Route::post('/categories/ready-made', 'CRUD\ReadyMadeController@store')->name('category.ready-made.store');
Route::post('/categories/ready-made/{id}/delete', 'CRUD\ReadyMadeController@destroy')->name('category.ready-made.delete');

Route::get('/categories/bottoms', 'CRUD\BottomController@index');
Route::post('/categories/bottoms', 'CRUD\BottomController@store')->name('category.bottom.store');
Route::get('/categories/bottoms/{id}', 'CRUD\BottomController@destroy')->name('category.bottom.destroy');
Route::get('/categories/bottoms/report', 'CRUD\BottomController@report')->name('category.bottom.report');

Route::get('/crud/wholesale','CRUD\WholesaleCustomerController@index');
Route::post('/crud/wholesale/update', 'CRUD\WholesaleCustomerController@update');
Route::post('/crud/wholesale/create', 'CRUD\WholesaleCustomerController@create');
Route::post('/crud/wholesale/delete', 'CRUD\WholesaleCustomerController@delete');

Route::get('/crud/vehicle_finance','CRUD\vehicleFinanceController@index');
Route::post('/crud/vehicle_finance/create','CRUD\vehicleFinanceController@create');
Route::post('/crud/vehicle_finance/update', 'CRUD\vehicleFinanceController@update');
Route::post('/crud/vehicle_finance/delete', 'CRUD\vehicleFinanceController@delete');

Route::get('/crud/vehicle', 'CRUD\vehicleController@index');
Route::post('/crud/vehicle/create', 'CRUD\vehicleController@create');
Route::post('/crud/vehicle/update', 'CRUD\vehicleController@update');
Route::post('/crud/vehicle/delete', 'CRUD\vehicleController@delete');

Route::get('/employee','EmployeeBasicController@index');
//Route::post('/employee/update','EmployeeController@update');
Route::post('/employee/create','EmployeeBasicController@create');
//Route::post('/employee/delete','EmployeeController@delete');
