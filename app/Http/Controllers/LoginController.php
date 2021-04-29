<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Middleware\CekLevel;
use App\Models\User;
use App\Models\Slider;
use App\Models\Room;
use App\Models\Reservation;
use App\Models\Facilites;
use App\Models\Eat_time;
use App\Models\Menu;
use App\Models\Event;
use App\Models\Contact;
use App\Models\Categorie;

class LoginController extends Controller
{
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

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
