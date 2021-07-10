<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\TestController;
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
Route::post('/contact', [PengunjungController::class, 'kirim'])->name('contact');


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
    // Route::get('/jadwal', [AdminController::class, 'jadwal']);
    Route::get('/menu', [AdminController::class, 'menu']);
    Route::get('/reservasi', [AdminController::class, 'reservasi']);
    Route::get('/tamu', [AdminController::class, 'tamu']);
    Route::get('/staff', [AdminController::class, 'staff']);

    // create

    Route::get('/create/categories', [CrudController::class, 'createcategories']);
    Route::post('/create/categories', [CrudController::class, 'addcategories']);
    Route::get('/create/slider', [CrudController::class, 'createslider']);
    Route::post('/create/slider', [CrudController::class, 'addslider'])->name('create/slider');
    Route::get('/create/room', [CrudController::class, 'createroom']);
    Route::post('/create/room', [CrudController::class, 'addroom'])->name('create/room');
    Route::get('/create/facility', [CrudController::class, 'createfacility']);
    Route::post('/create/facility', [CrudController::class, 'addfacility'])->name('create/facility');
    Route::get('/create/menu', [CrudController::class, 'createmenu']);
    Route::post('/create/menu', [CrudController::class, 'addmenu'])->name('create/menu');
    Route::get('/create/tamu', [CrudController::class, 'createtamu']);
    Route::post('/create/tamu', [CrudController::class, 'addtamu'])->name('create/tamu');
    Route::get('/create/staff', [CrudController::class, 'createstaff']);
    Route::post('/create/staff', [CrudController::class, 'addstaff'])->name('create/staff');

    // update

    Route::get('/room/{id}/edit', [CrudController::class, 'editroom']);
    Route::post('/room/{id}', [CrudController::class, 'updateroom'])->name('room');
    Route::get('/fasilitas/{id}/edit', [CrudController::class, 'editfasilitas']);
    Route::post('/fasilitas/{id}', [CrudController::class, 'updatefasilitas'])->name('fasilitas');
    Route::get('/menu/{id}/edit', [CrudController::class, 'editmenu']);
    Route::post('/menu/{id}', [CrudController::class, 'updatemenu'])->name('menu');
    Route::get('/slider/{id}/edit', [CrudController::class, 'editslider']);
    Route::post('/slider/{id}', [CrudController::class, 'updateslider'])->name('slider');
    Route::get('/tamu/{id}/edit', [CrudController::class, 'edittamu']);
    Route::put('/tamu/{id}', [CrudController::class, 'updatetamu']);
    Route::get('/reservasi/{id}/edit', [CrudController::class, 'updatereservasi']);
    Route::get('/reservasi/{id}/cancel', [CrudController::class, 'cancel']);
    Route::get('/staff/{id}/edit', [CrudController::class, 'editstaff']);
    Route::put('/staff/{id}', [CrudController::class, 'updatestaff']);

    Route::get('/reservasi/{id}/checkout', [CrudController::class, 'checkout']);
    Route::put('/reservasi/{id}', [CrudController::class, 'updatereservasi']);

    // delete

    Route::delete('/room/{id}', [CrudController::class, 'deleteroom']);
    Route::delete('/fasilitas/{id}', [CrudController::class, 'deletefasilitas']);
    Route::delete('/menu/{id}', [CrudController::class, 'deletemenu']);
    Route::delete('/slider/{id}', [CrudController::class, 'deleteslider']);
    Route::delete('/user/{id}', [CrudController::class, 'deleteuser']);
    Route::delete('/reservasi/{id}', [CrudController::class, 'deletereservasi']);
    Route::delete('/contact/{id}', [CrudController::class, 'deleteinbox']);
    Route::delete('/tamu/{id}', [CrudController::class, 'deletetamu']);
    Route::delete('/staff/{id}', [CrudController::class, 'deletestaff']);
});

Route::group(['middleware' => ['auth', 'ceklevel:customer']], function () {
    Route::get('/pesan/{id}', [PengunjungController::class, 'booking']);
    Route::post('/pesan/{id}', [PengunjungController::class, 'pesan']);
});



Route::get('/index', [TestController::class, 'index']);
