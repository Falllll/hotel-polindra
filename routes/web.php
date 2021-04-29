<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CrudController;
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


Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/simpanregister', [LoginController::class, 'simpanregister'])->name('simpanregister');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
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

    Route::get('/create/categories', [CrudController::class, 'createcategories']);
    Route::post('/create/categories', [CrudController::class, 'addcategories']);
    Route::get('/create/slider', [CrudController::class, 'createslider']);
    Route::post('/create/slider', [CrudController::class, 'addslider']);
    Route::get('/create/room', [CrudController::class, 'createroom']);
    Route::post('/create/room', [CrudController::class, 'addroom']);
    Route::get('/create/facility', [CrudController::class, 'createfacility']);
    Route::post('/create/facility', [CrudController::class, 'addfacility']);
    Route::get('/create/schedule', [CrudController::class, 'createschedule']);
    Route::post('/create/schedule', [CrudController::class, 'addschedule']);
    Route::get('/create/menu', [CrudController::class, 'createmenu']);
    Route::post('/create/menu', [CrudController::class, 'addmenu']);
    Route::get('/create/event', [CrudController::class, 'createevent']);
    Route::post('/create/event', [CrudController::class, 'addevent']);

    Route::get('/room/{id}/edit', [CrudController::class, 'editroom']);
    Route::put('/room/{id}', [CrudController::class, 'updateroom']);
    Route::get('/kategori/{id}/edit', [CrudController::class, 'editkategori']);
    Route::put('/kategori/{id}', [CrudController::class, 'updatekategori']);
    Route::get('/event/{id}/edit', [CrudController::class, 'editevent']);
    Route::put('/event/{id}', [CrudController::class, 'updateevent']);
    Route::get('/fasilitas/{id}/edit', [CrudController::class, 'editfasilitas']);
    Route::put('/fasilitas/{id}', [CrudController::class, 'updatefasilitas']);
    Route::get('/menu/{id}/edit', [CrudController::class, 'editmenu']);
    Route::put('/menu/{id}', [CrudController::class, 'updatemenu']);
    Route::get('/jadwal/{id}/edit', [CrudController::class, 'editjadwal']);
    Route::put('/jadwal/{id}', [CrudController::class, 'updatejadwal']);
    Route::get('/slider/{id}/edit', [CrudController::class, 'editslider']);
    Route::put('/slider/{id}', [CrudController::class, 'updateslider']);

});

Route::group(['middleware' => ['auth', 'ceklevel:admin,customer']], function () {
    Route::get('/pesan', [PengunjungController::class, 'booking'])->name('pesan');
});