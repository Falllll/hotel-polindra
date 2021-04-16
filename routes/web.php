<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\PengunjungController@home');
Route::get('/about', 'App\Http\Controllers\PengunjungController@about');
Route::get('/room', 'App\Http\Controllers\PengunjungController@room');
Route::get('/service', 'App\Http\Controllers\PengunjungController@service');
Route::get('/news', 'App\Http\Controllers\PengunjungController@news');
Route::get('/contact', 'App\Http\Controllers\PengunjungController@contact');
Route::get('/admin', 'App\Http\Controllers\AdminController@admin')->name('admin');
Route::get('/login', 'App\Http\Controllers\AdminController@login')->name('login');
Route::post('/postlogin', 'App\Http\Controllers\AdminController@postlogin')->name('postlogin');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout')->name('logout');
Route::get('/newpost', 'App\Http\Controllers\AdminController@newpost');
Route::get('/post', 'App\Http\Controllers\AdminController@post');
Route::get('/kategori', 'App\Http\Controllers\AdminController@kategori');
