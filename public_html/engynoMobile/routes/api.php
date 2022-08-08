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
Route::post('/login1','UserController@login');
Route::post('/register1', 'UserController@register');


Route::middleware('auth:api')->group(function () {
    
    Route::get('/user','UserController@user');
    Route::put('editname/{id}','UserController@edit1');
    Route::put('editemail/{id}','UserController@edit2');
    

});

    
