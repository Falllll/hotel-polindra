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
use Alert;
use App\Models\Staffs;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    // Tambah

    public function createslider()
    {
        return view('admin/form.create.create-slider');
    }

    public function addslider(Request $request)
    {

        $nm = $request->gambar;
        $namafile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();

        $dtUpload = new Slider;
        $dtUpload->caption = $request->caption;
        $dtUpload->gambar = $namafile;

        $nm->move(public_path() . '/img/room-slider', $namafile);
        $dtUpload->save();
        alert()->success('Berhasil', 'Data berhasil ditambahkan');
        return redirect('/slider');
    }

    public function createroom()
    {
        return view('admin/form.create.create-room');
    }

    public function addroom(Request $request)
    {

        $nm1 = $request->gambar_1;
        $namafile1 = time() . rand(100, 999) . "." . $nm1->getClientOriginalExtension();
        $nm2 = $request->gambar_2;
        $namafile2 = time() . rand(100, 999) . "." . $nm2->getClientOriginalExtension();
        $nm3 = $request->gambar_3;
        $namafile3 = time() . rand(100, 999) . "." . $nm3->getClientOriginalExtension();
        $nm4 = $request->gambar_4;
        $namafile4 = time() . rand(100, 999) . "." . $nm4->getClientOriginalExtension();

        $dtUpload = new Room;
        $dtUpload->room_type = $request->room_type;
        $dtUpload->stok = $request->stok;
        $dtUpload->price = $request->price;
        $dtUpload->desc = $request->desc;
        $dtUpload->gambar_1 = $namafile1;
        $dtUpload->gambar_2 = $namafile2;
        $dtUpload->gambar_3 = $namafile3;
        $dtUpload->gambar_4 = $namafile4;

        $nm1->move(public_path() . '/img/room', $namafile1);
        $nm2->move(public_path() . '/img/room', $namafile2);
        $nm3->move(public_path() . '/img/room', $namafile3);
        $nm4->move(public_path() . '/img/room', $namafile4);
        $dtUpload->save();
        alert()->success('Berhasil', 'Data berhasil ditambahkan');
        return redirect('/room');
    }

    public function createfacility()
    {
        return view('admin/form.create.create-facility');
    }

    public function addfacility(Request $request)
    {

        $nm = $request->gambar;
        $namafile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();

        $dtUpload = new Facilites;
        $dtUpload->nama = $request->nama;
        $dtUpload->desc = $request->desc;
        $dtUpload->gambar = $namafile;

        $nm->move(public_path() . '/img/fasilitas', $namafile);
        $dtUpload->save();

        alert()->success('Berhasil', 'Data berhasil ditambahkan');
        return redirect('/fasilitas');
    }

    public function createmenu()
    {
        return view('admin/form.create.create-menu');
    }

    public function addmenu(Request $request)
    {

        $nm = $request->gambar;
        $namafile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();

        $dtUpload = new Menu;
        $dtUpload->nama_makanan = $request->nama_makanan;
        $dtUpload->harga = $request->harga;
        $dtUpload->desc = $request->desc;
        $dtUpload->gambar = $namafile;

        $nm->move(public_path() . '/img/menu', $namafile);
        $dtUpload->save();
        alert()->success('Berhasil', 'Data berhasil ditambahkan');
        return redirect('/menu');
    }

    public function createtamu()
    {
        return view('admin/form.create.create-tamu');
    }

    public function addtamu(Request $request)
    {

        Pengunjung::create($request->all());
        alert()->success('Berhasil', 'Data berhasil ditambahkan');
        return redirect('/tamu');
    }

    public function createstaff()
    {
        return view('admin/form.create.create-staff');
    }

    public function addstaff(Request $request)
    {

        Staffs::create($request->all());
        alert()->success('Berhasil', 'Data berhasil ditambahkan');
        return redirect('/staff');
    }

    // Edit

    public function editroom($id)
    {
        $room = Room::findorfail($id);
        return view('admin.form.edit.edit-room', compact('room'));
    }

    public function updateroom(Request $request, $id)
    {
        $ubah = Room::findorfail($id);
        $awal1 = $ubah->gambar_1;
        $awal2 = $ubah->gambar_2;
        $awal3 = $ubah->gambar_3;
        $awal4 = $ubah->gambar_4;

        if ($request['gambar_1'] != null) {

            $request->gambar->move(public_path() . '/img/room', $awal1);
        }
        if ($request['gambar_2'] != null) {
            $request->gambar->move(public_path() . '/img/room', $awal2);
        }
        if ($request['gambar_3'] != null) {
            $request->gambar->move(public_path() . '/img/room', $awal3);
        }
        if ($request['gambar_4'] != null) {
            $request->gambar->move(public_path() . '/img/room', $awal4);
        }

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

        // $request->gambar_1->move(public_path() . '/img/room', $awal1);
        // $request->gambar_2->move(public_path() . '/img/room', $awal2);
        // $request->gambar_3->move(public_path() . '/img/room', $awal3);
        // $request->gambar_4->move(public_path() . '/img/room', $awal4);
        $ubah->update($room);

        alert()->success('Berhasil', 'Data berhasil diubah');
        return redirect('/room');
    }

    public function editfasilitas($id)
    {
        $fasilitas = Facilites::findorfail($id);
        return view('admin.form.edit.edit-fasilitas', compact('fasilitas'));
    }

    public function updatefasilitas(Request $request, $id)
    {
        $ubah = Facilites::findorfail($id);
        $awal = $ubah->gambar;

        if ($request['gambar'] != null) {

            $request->gambar->move(public_path() . '/img/fasilitas', $awal);
        }


        $fasilitas = [
            'nama' => $request['nama'],
            'gambar' => $awal,
            'desc' => $request['desc'],
        ];

        $ubah->update($fasilitas);

        alert()->success('Berhasil', 'Data berhasil diubah');
        return redirect('/fasilitas');
    }

    public function editmenu($id)
    {
        $menu = Menu::findorfail($id);
        return view('admin.form.edit.edit-menu', compact('menu'));
    }

    public function updatemenu(Request $request, $id)
    {
        $ubah = Menu::findorfail($id);
        $awal = $ubah->gambar;

        if ($request['gambar'] != null) {

            $request->gambar->move(public_path() . '/img/menu', $awal);
        }


        $menu = [
            'nama_makanan' => $request['nama_makanan'],
            'gambar' => $awal,
            'harga' => $request['harga'],
            'desc' => $request['desc'],
        ];

        // $request->gambar->move(public_path() . '/img/menu', $awal);
        $ubah->update($menu);
        alert()->success('Berhasil', 'Data berhasil diubah');
        return redirect('/menu');
    }

    public function editslider($id)
    {
        $slider = Slider::findorfail($id);
        return view('admin.form.edit.edit-slider', compact('slider'));
    }

    public function updateslider(Request $request, $id)
    {
        $ubah = Slider::findorfail($id);
        $awal = $ubah->gambar;

        if ($request['gambar'] != null) {

            $request->gambar->move(public_path() . '/img/room-slider', $awal);
        }

        $slider = [
            'caption' => $request['caption'],
            'gambar' => $awal,
        ];

        // $request->gambar->move(public_path() . '/img/room-slider', $awal);
        $ubah->update($slider);
        alert()->success('Berhasil', 'Data berhasil diubah');
        return redirect('/slider');
    }

    public function edittamu($id)
    {
        $tamu = Pengunjung::find($id);
        return view('/admin.form.edit.edit-tamu', compact('tamu'));
    }

    public function updatetamu(Request $request, $id)
    {
        $tamu = Pengunjung::find($id);
        $tamu->update($request->all());
        alert()->success('Berhasil', 'Data berhasil diubah');
        return redirect('/tamu');
    }

    public function editreservasi($id)
    {
        $reservasi = Reservation::find($id);
        return view('/admin.form.edit.edit-reservasi', compact('reservasi'));
    }

    public function cancel(Request $request, $id)
    {
        $reservasi = Reservation::find($id);
        $reservasi->status = "Cancel";

        $reservasi->update($request->all());
        alert()->success('Berhasil', 'Reservasi di Batalkan');
        return redirect('/reservasi');
    }

    public function checkout(Request $request, $id)
    {
        $reservasi = Reservation::find($id);
        $reservasi->status = "Check Out";
        // cek kamar tersedia sekarang
        $room_type = $reservasi->room_type;
        $room = DB::table('rooms')->where('room_type', $room_type)->first();

        // mengurangi jumlah stok yang ada
        $last_stok = $room->stok + 1;

        DB::table('rooms')->where('id', $room->id)->update(['stok' => $last_stok]);

        //  update reservasi
        $reservasi->update($request->all());
        alert()->success('Berhasil', 'Check Out Berhasil');
        return redirect('/reservasi');
    }

    public function updatereservasi(Request $request, $id)
    {
        // dd($request->all());
        $reservasi = Reservation::find($id);
        // cek kamar tersedia sekarang
        $reservasi->status = "Check In";
        $room_type = $reservasi->room_type;
        $room = DB::table('rooms')->where('room_type', $room_type)->first();

        // mengurangi jumlah stok yang ada
        $last_stok = $room->stok - 1;

        if ($last_stok <= 0) {
            alert()->warning('Gagal', 'Room Sudah penuh');
            return redirect('/reservasi');
        }

        DB::table('rooms')->where('id', $room->id)->update(['stok' => $last_stok]);

        //  update reservasi
        $reservasi->update($request->all());
        alert()->success('Berhasil', 'Check In Berhasil');
        return redirect('/reservasi');
    }

    public function editstaff($id)
    {
        $staff = Staffs::find($id);
        return view('/admin.form.edit.edit-staff', compact('staff'));
    }

    public function updatestaff(Request $request, $id)
    {
        $staff = Staffs::find($id);
        $staff->update($request->all());
        alert()->success('Berhasil', 'Data berhasil diubah');
        return redirect('/staff');
    }


    // DELETE
    public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus');
        return redirect('/user');
    }

    // public function deleteevent($id){
    //     $event = Event::find($id);
    //     $event->delete();
    //     return redirect('/event');
    // }

    public function deletefasilitas($id)
    {
        $fasilitas = Facilites::find($id);
        $fasilitas->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus');
        return redirect('/fasilitas');
    }

    public function deleteinbox($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus');
        return redirect('/inbox');
    }

    // public function deletejadwal($id){
    //     $jadwal = Eat_time::find($id);
    //     $jadwal->delete();
    //     return redirect('/jadwal');
    // }

    public function deletekategori($id)
    {
        $kategori = Categorie::find($id);
        $kategori->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus');
        return redirect('/kategori');
    }

    public function deletemenu($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus');
        return redirect('/menu');
    }

    public function deletereservasi($id)
    {
        $reservasi = Reservation::find($id);
        $reservasi->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus');
        return redirect('/reservasi');
    }

    public function deleteroom($id)
    {
        $room = Room::find($id);
        $room->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus');
        return redirect('/room');
    }

    public function deleteslider($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus');
        return redirect('/slider');
    }

    public function deletetamu($id)
    {
        $pengunjungs = Pengunjung::find($id);
        $pengunjungs->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus');
        return redirect('/tamu');
    }

    public function deletestaff($id)
    {
        $staff = Staffs::find($id);
        $staff->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus');
        return redirect('/staff');
    }
}
