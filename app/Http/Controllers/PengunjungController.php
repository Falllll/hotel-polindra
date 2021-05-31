<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        return view('pengunjung.rooms');
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
