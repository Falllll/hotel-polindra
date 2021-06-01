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
use App\Models\Facilites;
// use App\Models\Eat_time;
use App\Models\Menu;
// use App\Models\Event;
use App\Models\Contact;
use App\Models\Categorie;

class CrudController extends Controller
{
    // Tambah

    public function createslider(){
        return view('admin/form.create.create-slider');
    }

    public function addslider(Request $request){

        $nm = $request->gambar;
        $namafile = time().rand(100,999).".".$nm->getClientOriginalExtension();

            $dtUpload = new Slider;
            $dtUpload->caption = $request->caption;
            $dtUpload->gambar = $namafile;

            $nm->move(public_path().'/img/room-slider', $namafile);
            $dtUpload->save();
            return redirect('/slider');
    }

    public function createroom(){
        return view('admin/form.create.create-room');
    }

    public function addroom(Request $request){

        $nm1 = $request->gambar_1;
        $namafile1 = time().rand(100,999).".".$nm1->getClientOriginalExtension();
        $nm2 = $request->gambar_2;
        $namafile2 = time().rand(100,999).".".$nm2->getClientOriginalExtension();
        $nm3 = $request->gambar_3;
        $namafile3 = time().rand(100,999).".".$nm3->getClientOriginalExtension();
        $nm4 = $request->gambar_4;
        $namafile4 = time().rand(100,999).".".$nm4->getClientOriginalExtension();

            $dtUpload = new Room;
            $dtUpload->room_type = $request->room_type;
            $dtUpload->stok = $request->stok;
            $dtUpload->price = $request->price;
            $dtUpload->desc = $request->desc;
            $dtUpload->gambar_1 = $namafile1;
            $dtUpload->gambar_2 = $namafile2;
            $dtUpload->gambar_3 = $namafile3;
            $dtUpload->gambar_4 = $namafile4;

            $nm1->move(public_path().'/img/room', $namafile1);
            $nm2->move(public_path().'/img/room', $namafile2);
            $nm3->move(public_path().'/img/room', $namafile3);
            $nm4->move(public_path().'/img/room', $namafile4);
            $dtUpload->save();
        return redirect('/room');
    }

    public function createfacility(){
        return view('admin/form.create.create-facility');
    }

    public function addfacility(Request $request){

        $nm = $request->gambar;
        $namafile = time().rand(100,999).".".$nm->getClientOriginalExtension();

            $dtUpload = new Facilites;
            $dtUpload->nama = $request->nama;
            $dtUpload->desc = $request->desc;
            $dtUpload->gambar = $namafile;

            $nm->move(public_path().'/img/fasilitas', $namafile);
            $dtUpload->save();
        return redirect('/fasilitas');
    }

    public function createmenu(){
        return view('admin/form.create.create-menu');
    }

    public function addmenu(Request $request){

        $nm = $request->gambar;
        $namafile = time().rand(100,999).".".$nm->getClientOriginalExtension();

            $dtUpload = new Menu;
            $dtUpload->nama_makanan = $request->nama_makanan;
            $dtUpload->harga = $request->harga;
            $dtUpload->desc = $request->desc;
            $dtUpload->gambar = $namafile;

            $nm->move(public_path().'/img/menu', $namafile);
            $dtUpload->save();
        return redirect('/menu');
    }

    public function createtamu(){
        return view('admin/form.create.create-tamu');
    }

    public function addtamu(Request $request){

        Pengunjung::create($request->all());
        return redirect('/tamu');
    }

    // Edit

    public function editroom($id){
        $room = Room::findorfail($id);
        return view('admin.form.edit.edit-room', compact('room'));
    }

    public function updateroom(Request $request, $id){
        $ubah = Room::findorfail($id);
        $awal1 = $ubah->gambar_1;
        $awal2 = $ubah->gambar_2;
        $awal3 = $ubah->gambar_3;
        $awal4 = $ubah->gambar_4;

        $room = [
            'room_type' => $request['room_type'],
            'gambar_1' => $awal1,
            'gambar_2' => $awal2,
            'gambar_3' => $awal3,
            'gambar_4' => $awal4,
            'stok' => $request['stok'],
            'price' => $request['price'],
            'desc' => $request['desc'],
        ];

        $request->gambar_1->move(public_path().'/img/room', $awal1);
        $request->gambar_2->move(public_path().'/img/room', $awal2);
        $request->gambar_3->move(public_path().'/img/room', $awal3);
        $request->gambar_4->move(public_path().'/img/room', $awal4);
        $ubah->update($room);

        return redirect ('/room');
    }

    public function editfasilitas($id){
        $fasilitas = Facilites::findorfail($id);
        return view('admin.form.edit.edit-fasilitas', compact('fasilitas'));
    }

    public function updatefasilitas(Request $request, $id){
        $ubah = Facilites::findorfail($id);
        $awal = $ubah->gambar;

        $fasilitas = [
            'nama' => $request['nama'],
            'gambar' => $awal,
            'desc' => $request['desc'],
        ];

        $request->gambar->move(public_path().'/img/fasilitas', $awal);
        $ubah->update($fasilitas);

        return redirect ('/fasilitas');
    }

    public function editmenu($id){
        $menu = Menu::findorfail($id);
        return view('admin.form.edit.edit-menu', compact('menu'));
    }

    public function updatemenu(Request $request, $id){
        $ubah = Menu::findorfail($id);
        $awal = $ubah->gambar;

        $menu = [
            'nama_makanan' => $request['nama_makanan'],
            'gambar' => $awal,
            'harga' => $request['harga'],
            'desc' => $request['desc'],
        ];

        $request->gambar->move(public_path().'/img/menu', $awal);
        $ubah->update($menu);
        return redirect ('/menu');
    }

    public function editslider($id){
        $slider = Slider::findorfail($id);
        return view('admin.form.edit.edit-slider', compact('slider'));
    }

    public function updateslider(Request $request, $id){
        $ubah = Slider::findorfail($id);
        $awal = $ubah->gambar;

        $slider = [
            'caption' => $request['caption'],
            'gambar' => $awal,
        ];

        $request->gambar->move(public_path().'/img/room-slider', $awal);
        $ubah->update($slider);
        return redirect ('/slider');
    }

    public function edittamu($id){
        $tamu = Pengunjung::find($id);
        return view ('/admin.form.edit.edit-tamu', compact('tamu'));
    }

    public function updatetamu(Request $request, $id){
        $tamu = Pengunjung::find($id);
        $tamu->update($request->all());
        return redirect('/tamu');
    }

    public function editreservasi($id){
        $reservasi = Reservation::find($id);
        return view ('/admin.form.edit.edit-reservasi', compact('reservasi'));
    }

    public function updatereservasi(Request $request, $id){
        $reservasi = Reservation::find($id);
        $reservasi->update($request->all());
        return redirect('/reservasi');
    }


    // DELETE
    public function deleteuser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
    
    // public function deleteevent($id){
    //     $event = Event::find($id);
    //     $event->delete();
    //     return redirect('/event');
    // }

    public function deletefasilitas($id){
        $fasilitas = Facilites::find($id);
        $fasilitas->delete();
        return redirect('/fasilitas');
    }

    public function deleteinbox($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/inbox');
    }

    // public function deletejadwal($id){
    //     $jadwal = Eat_time::find($id);
    //     $jadwal->delete();
    //     return redirect('/jadwal');
    // }

    public function deletekategori($id){
        $kategori = Categorie::find($id);
        $kategori->delete();
        return redirect('/kategori');
    }

    public function deletemenu($id){
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/menu');
    }

    public function deletereservasi($id){
        $reservasi = Reservation::find($id);
        $reservasi->delete();
        return redirect('/reservasi');
    }

    public function deleteroom($id){
        $room = Room::find($id);
        $room->delete();
        return redirect('/room');
    }

    public function deleteslider($id){
        $slider = Slider::find($id);
        $slider->delete();
        return redirect('/slider');
    }

    public function deletetamu($id){
        $pengunjungs = Pengunjung::find($id);
        $pengunjungs->delete();
        return redirect('/tamu');
    }
}
