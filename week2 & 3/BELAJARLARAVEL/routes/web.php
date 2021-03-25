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
    return view('welcome');
});

// Route::get('user','App\Http\Controllers\ManagementUserController@index');

Route::resource('user','App\Http\Controllers\ManagementUserController');
Route::resource('create','App\Http\Controllers\ManagementUserController');
Route::resource('store','App\Http\Controllers\ManagementUserController');
Route::resource('show','App\Http\Controllers\ManagementUserController');
Route::resource('edit','App\Http\Controllers\ManagementUserController');
Route::resource('update','App\Http\Controllers\ManagementUserController');
Route::resource('destroy','App\Http\Controllers\ManagementUserController');

// Route::get('home', function(){
//     return view('home');
// });

Route::get("home", function () {
    return view("home");
});
