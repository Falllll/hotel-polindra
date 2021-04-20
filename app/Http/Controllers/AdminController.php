<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Str;

class AdminController extends Controller
{

    public function login()
    {
        return view('admin.index');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/admin');
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

    public function register(){
        return view('admin.register');
    }

    public function simpanregister(Request $request){
        
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
