<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Middleware\CekLevel;
use App\Models\User;
use App\Models\Pengunjung;
use App\Models\Slider;
use App\Models\Room;
use App\Models\Reservation;
use App\Models\DetailReservasi;
use App\Models\Facilites;
// use App\Models\Eat_time;
use App\Models\Menu;
// use App\Models\Event;
use App\Models\Contact;
use App\Models\Categorie;
use Alert;

class AdminController extends Controller
{

    public function admin()
    {
        return view('admin.dashboard');
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
        $rooms = Room::latest()->get();
        return view('admin.room', compact(['rooms', 'i']));
    }

    public function user()
    {
        $i = 0;
        $i++;
        $users = User::all();
        return view('admin.user', compact(['users','i']));
    }

    // public function event()
    // {
    //     $i = 0;
    //     $i++;
    //     $events = Event::all();
    //     return view('admin.event', compact (['events', 'i']));
    // }

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
    public function detail()
    {
        $i = 0;
        $i++;
        $details = DetailReservasi::all();
        return view('admin.detail', compact(['details','i']));
    }

    public function tamu(){
        $i = 0;
        $i++;
        $pengunjungs = Pengunjung::all();
        return view('admin.tamu', compact(['pengunjungs','i']));
    }

}
