<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware' => ['jwt-auth']], function () {
    // Route::get('category','Api\CategoryController@index');
    Route::post('refresh', 'Api\AuthController@refresh');
    //Route::resource('categoria', 'Api\CategoryController');
});
Route::post('login', 'Api\AuthController@login');
Route::post('logout', 'Api\AuthController@logout');
Route::post('me', 'Api\AuthController@me');

//CATEGORY ROUTE
Route::get('category','Api\CategoryController@index')->name('category.index');
Route::post('category','Api\CategoryController@store')->name('category.store');
Route::get('category/{id}','Api\CategoryController@show')->name('category.show');
Route::post('category/{id}','Api\CategoryController@update')->name('category.update');
Route::post('category/delete/{id}','Api\CategoryController@destroy')->name('category.destroy');

//PRODUCT ROUTE
Route::get('product','Api\ProductController@index')->name('product.index');
Route::post('product','Api\ProductController@store')->name('product.store');
Route::get('product/{id}','Api\ProductController@show')->name('product.show');
Route::post('product/{id}','Api\ProductController@update')->name('product.update');
Route::post('product/delete/{id}','Api\ProductController@destroy')->name('product.destroy');