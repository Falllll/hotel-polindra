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
use App\Models\Staffs;
use Alert;

class PengunjungController extends Controller
{
    public function home()
    {
        $services = Facilites::paginate(2);
        $sliders = Slider::all();
        return view('pengunjung.index', compact(['services', 'sliders']));
    }

    public function about()
    {
        return view('pengunjung.about');
    }

    public function rooms()
    {
        $rooms = Room::paginate(4);
        return view('pengunjung.rooms', compact('rooms'));
    }

    public function restaurant()
    {
        $restaurants = Menu::simplePaginate(4);
        return view('pengunjung.restaurant', compact('restaurants'));
    }
    public function service()
    {
        $services = Facilites::all();
        return view('pengunjung.services', compact('services'));
    }
    public function slider()
    {
        $sliders = Slider::all();
        return view('pengunjung.index', compact('sliders'));
    }

    public function news()
    {
        return view('pengunjung.news');
    }

    public function contact()
    {
        return view('pengunjung.contact');
    }

    public function kirim(Request $request)
    {

        Contact::create($request->all());
        alert()->success('Pesan berhasil dikirim', 'Terimakasih');
        return redirect('/contact');
    }

    public function booking($id)
    {

        $rooms = Room::where('id', $id)->first();

        return view('pengunjung.booking', compact('rooms'));
    }

    public function pesan(Request $request, $id)
    {
        $rooms = Room::where('id', $id)->first();

        $date =  date('y-m-d', strtotime($request->date));

        // Simpan data ke tabel reservasi
        $reservasi = new Reservation;
        $reservasi->user_id = Auth::user()->id;
        $reservasi->pemesan = $request->pemesan;
        $reservasi->email = $request->email;
        $reservasi->alamat = $request->alamat;
        $reservasi->no_hp = $request->no_hp;
        $reservasi->tanggal = $date;
        $reservasi->room_type = $rooms->room_type;
        $reservasi->lama_inap = $request->lama_inap;
        $reservasi->jumlah_harga = $rooms->price * $request->lama_inap;
        $reservasi->status = "Booking";
        $reservasi->save();

        // Simpan data ke tabel detail_reservasi
        $reservasi_baru = Reservation::where('user_id', Auth::user()->id)->where('status', 0)->first();

        $detail = new DetailReservasi;
        $detail->kamar_id = $rooms->id;
        $detail->reservasi_id = $reservasi_baru->id;
        $detail->nama_tamu = $request->pemesan;
        $detail->lama_inap = $request->lama_inap;
        $detail->tanggal = $date;
        $detail->jumlah_harga = $rooms->price * $request->lama_inap;
        $detail->save();

        alert()->success('Harap tunggu', 'Pesanan kamar anda sedang di proses, silahkan cek email/sms hp anda untuk informasi lebih lanjut');
        return redirect('/rooms');
    }
}
