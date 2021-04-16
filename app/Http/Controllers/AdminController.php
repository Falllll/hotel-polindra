<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
}
