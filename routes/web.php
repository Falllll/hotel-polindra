<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengunjungController;
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

Route::get('/', [PengunjungController::class, 'home']);
Route::get('/about', [PengunjungController::class, 'about']);
Route::get('/room', [PengunjungController::class, 'room']);
Route::get('/service', [PengunjungController::class, 'service']);
Route::get('/news', [PengunjungController::class, 'news']);
Route::get('/contact', [PengunjungController::class, 'contact']);

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/postlogin', [AdminController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin',[AdminController::class, 'admin'])->name('admin');
});

Route::get('/newpost', [AdminController::class, 'newpost']);
Route::get('/post', [AdminController::class, 'post']);
Route::get('/kategori', [AdminController::class, 'kategori']);
