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
    // Tambah

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


    // Edit

    public function editroom($id){
        $room = Room::find($id);
        return view('admin.form.edit.edit-room', compact('room'));
    }

    public function updateroom(Request $request, $id){
        $room = Room::find($id);
        $room->update($request->all());
        return redirect ('/room');
    }

    public function editkategori($id){
        $kategori = Categorie::find($id);
        return view('admin.form.edit.edit-kategori', compact('kategori'));
    }

    public function updatekategori(Request $request, $id){
        $kategori = Categorie::find($id);
        $kategori->update($request->all());
        return redirect ('/kategori');
    }

    public function editevent($id){
        $event = Event::find($id);
        return view('admin.form.edit.edit-event', compact('event'));
    }

    public function updateevent(Request $request, $id){
        $event = Event::find($id);
        $event->update($request->all());
        return redirect ('/event');
    }

    public function editfasilitas($id){
        $fasilitas = Facilites::find($id);
        return view('admin.form.edit.edit-fasilitas', compact('fasilitas'));
    }

    public function updatefasilitas(Request $request, $id){
        $fasilitas = Facilites::find($id);
        $fasilitas->update($request->all());
        return redirect ('/fasilitas');
    }

    public function editmenu($id){
        $menu = Menu::find($id);
        return view('admin.form.edit.edit-menu', compact('menu'));
    }

    public function updatemenu(Request $request, $id){
        $menu = Menu::find($id);
        $menu->update($request->all());
        return redirect ('/menu');
    }

    public function editjadwal($id){
        $jadwal = Eat_time::find($id);
        return view('admin.form.edit.edit-jadwal', compact('jadwal'));
    }

    public function updatejadwal(Request $request, $id){
        $jadwal = Eat_time::find($id);
        $jadwal->update($request->all());
        return redirect ('/jadwal');
    }

    public function editslider($id){
        $slider = Slider::find($id);
        return view('admin.form.edit.edit-slider', compact('slider'));
    }

    public function updateslider(Request $request, $id){
        $slider = Slider::find($id);
        $slider->update($request->all());
        return redirect ('/slider');
    }
}
