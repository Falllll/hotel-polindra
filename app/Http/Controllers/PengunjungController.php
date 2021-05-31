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

class PengunjungController extends Controller
{
    public function home()
    {
        return view('pengunjung.index');
    }

    public function about()
    {
        return view('pengunjung.about');
    }

    public function rooms()
    {
        $i = 0;
        $i++;
        $rooms = Room::latest()->get();
        return view('pengunjung.rooms', compact(['rooms', 'i']));
    }

    public function restaurant()
    {
        return view('pengunjung.restaurant');
    }
    public function service()
    {
        return view('pengunjung.services');
    }

    public function news()
    {
        return view('pengunjung.news');
    }

    public function contact()
    {
        return view('pengunjung.contact');
    }

    public function booking(){
        return view('pengunjung.booking');
    }
}
