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

class CrudController extends Controller
{
    public function createcategories(){
        return view('admin/form.create.create-categories');
    }

    public function addcategories(Request $request){

        Categorie::create($request->all());
        return redirect('/kategori');
    }

    public function createslider(){
        return view('admin/form.create.create-slider');
    }

    public function addslider(Request $request){

        Slider::create($request->all());
        return redirect('/slider');
    }

    public function createroom(){
        return view('admin/form.create.create-room');
    }

    public function addroom(Request $request){

        Room::create($request->all());
        return redirect('/room');
    }

    public function createfacility(){
        return view('admin/form.create.create-facility');
    }

    public function addfacility(Request $request){

        Facilites::create($request->all());
        return redirect('/fasilitas');
    }

    public function createschedule(){
        return view('admin/form.create.create-schedule');
    }

    public function addschedule(Request $request){

        Eat_time::create($request->all());
        return redirect('/jadwal');
    }

    public function createmenu(){
        return view('admin/form.create.create-menu');
    }

    public function addmenu(Request $request){

        Menu::create($request->all());
        return redirect('/menu');
    }

    public function createevent(){
        return view('admin/form.create.create-event');
    }

    public function addevent(Request $request){

        Event::create($request->all());
        return redirect('/event');
    }
}
