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
        $i = 0;
        $i++;
        $categories = Categorie::all();
        return view('admin.kategori', compact(['categories','i']));
    }

    public function slider()
    {
        $i = 0;
        $i++;
        $sliders = Slider::all();
        return view('admin.slider', compact(['sliders','i']));
    }

    public function room()
    {
        $i = 0;
        $i++;
        $rooms = Room::all();
        return view('admin.room', compact(['rooms','i']));
    }

    public function user()
    {
        $i = 0;
        $i++;
        $users = User::all();
        return view('admin.user', compact(['users','i']));
    }

    public function event()
    {
        $i = 0;
        $i++;
        $events = Event::all();
        return view('admin.event', compact (['events', 'i']));
    }

    public function inbox()
    {
        $i = 0;
        $i++;
        $contacts = Contact::all();
        return view('admin.inbox', compact(['contacts','i']));
    }

    public function fasilitas()
    {
        $i = 0;
        $i++;
        $facilitiess = Facilites::all();
        return view('admin.fasilitas', compact(['facilitiess', 'i']));
    }

    public function jadwal()
    {
        $i = 0;
        $i++;
        $schedules = Eat_time::all();
        return view('admin.jadwal', compact(['schedules', 'i']));
    }

    public function menu()
    {
        $i = 0;
        $i++;
        $menus = Menu::all();
        return view('admin.menu', compact(['menus','i']));
    }
    public function reservasi()
    {
        $i = 0;
        $i++;
        $reservations = Reservation::all();
        return view('admin.reservasi', compact(['reservations','i']));
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
