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
Route::group(['middleware' =>'auth:sanctum', 'verified'], function () {
    // Admin Dashboard
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');
    Route::resource('category', 'App\Http\Controllers\CategoryController');
    Route::resource('news', 'App\Http\Controllers\newsController');
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     Route::get('/dashboard', 'HomeController@index')->name('dashboard');
//     // return view('dashboard');
// })->name('dashboard');
