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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('permissions', 'PermissionController@index');
Route::get('permissions/create', 'PermissionController@create');
Route::post('permissions', 'PermissionController@store');
Route::get('permissions/{id}','PermissionController@show');

Route::get('/about', function () {
    return view('about');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});
