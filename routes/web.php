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
Route::get('/rooms', [PengunjungController::class, 'rooms']);
Route::get('/service', [PengunjungController::class, 'service']);
Route::get('/news', [PengunjungController::class, 'news']);
Route::get('/restaurant', [PengunjungController::class, 'restaurant']);
Route::get('/contact', [PengunjungController::class, 'contact']);
Route::get('/pesan', [PengunjungController::class, 'booking']);

Route::get('/register', [AdminController::class, 'register'])->name('register');
Route::post('/simpanregister', [AdminController::class, 'simpanregister'])->name('simpanregister');
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/postlogin', [AdminController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
});
Route::get('/newpost', [AdminController::class, 'newpost']);
Route::get('/post', [AdminController::class, 'post']);
Route::get('/kategori', [AdminController::class, 'kategori']);
Route::get('/slider', [AdminController::class, 'slider']);
Route::get('/room', [AdminController::class, 'room']);
Route::get('/user', [AdminController::class, 'user']);
Route::get('/event', [AdminController::class, 'event']);
Route::get('/inbox', [AdminController::class, 'inbox']);
Route::get('/fasilitas', [AdminController::class, 'fasilitas']);
Route::get('/jadwal', [AdminController::class, 'jadwal']);
Route::get('/menu', [AdminController::class, 'menu']);
Route::get('/reservasi', [AdminController::class, 'reservasi']);
