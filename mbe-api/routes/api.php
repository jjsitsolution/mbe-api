<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


/*Route::get('product', 'ProductsController@index');
Route::get('product/{product}', 'ProductsController@show');
Route::post('product', 'ProductsController@store');
Route::put('product/{product}', 'ProductsController@update');
Route::delete('product/{product}', 'ProductsController@destroy');*/

Route::resource('product', 'ProductsController');
Route::resource('classification', 'ClassificationsController');
Route::resource('unit', 'UnitsController');
Route::resource('brand', 'BrandsController');
Route::resource('customer', 'CustomersController');
Route::resource('supplier', 'SuppliersController');
Route::resource('userrole', 'UserRolesController');