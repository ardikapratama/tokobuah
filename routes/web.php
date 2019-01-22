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

Route::get('lemot', function () {
    echo "kenapa kok lemot";
});

Route::get('/home', function () {
    return "disini rumah";;
});

Route::get('/pohong', function () {
    return view('telo');
});

Route::get('/terong', 'CapungController@index');
Route::get('/brokoli', 'CapungController@pujangga');
Route::get('/brokoli/dewa', 'CapungController@siti');
Route::get('/dataSupplier', 'SupplierController@index');
// Route::get('/Customer','CustomerController@index');
// Route::get('/Customer/create','CustomerController@create');
Route::resource('/Customer','CustomerController');
Route::get('/supplier/create','SupplierController@create');
Route::resource('supplier','SupplierController');

Route::get('/employee/create','EmployeeController@index');
Route::get('/employee/create','EmployeeController@create');
Route::resource('employee','EmployeeController');
?>
