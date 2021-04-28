<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Str;
use App\Http\Middleware\CekLevel;

class AdminController extends Controller
{

    public function login()
    {
        return view('admin.index');
    }

    public function postlogin(Request $request)
    {
        
        if(Auth::attempt($request->only('email', 'password', 'level'))) {
                return redirect('/admin');
                return redirect('/pesan'); 
            
        }

        return redirect('/login');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function newpost()
    {
        return view('admin.newPost');
    }

    public function post()
    {
        return view('admin.post');
    }

    public function kategori()
    {
        return view('admin.kategori');
    }

    public function slider()
    {
        return view('admin.slider');
    }

    public function room()
    {
        return view('admin.room');
    }

    public function user()
    {
        return view('admin.user');
    }

    public function event()
    {
        return view('admin.event');
    }

    public function inbox()
    {
        return view('admin.inbox');
    }

    public function fasilitas()
    {
        return view('admin.fasilitas');
    }

    public function jadwal()
    {
        return view('admin.jadwal');
    }

    public function menu()
    {
        return view('admin.menu');
    }
    public function reservasi()
    {
        return view('admin.reservasi');
    }


    public function register()
    {
        return view('admin.register');
    }

    public function simpanregister(Request $request)
    {

        User::create([
            'name' => $request->name,
            'level' => 'customer',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('pengunjung.index');
    }
}
