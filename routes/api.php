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
    Route::get('category','Api\CategoryController@index');
    Route::post('refresh', 'Api\AuthController@refresh');
    //Route::resource('categoria', 'Api\CategoryController');
});
Route::post('login', 'Api\AuthController@login');
Route::post('logout', 'Api\AuthController@logout');
Route::post('me', 'Api\AuthController@me');