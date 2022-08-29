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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/perulangan','App\Http\Controllers\PdasController@perulangan');
Route::get('/percabangan','App\Http\Controllers\PdasController@percabangan');
// Route::get('/luasling','App\Http\Controllers\PdasController@luaslingkaran');
Route::get('/1','App\Http\Controllers\PdasController@testing1');
