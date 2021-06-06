@extends('admin.form.create.layout')

@section('title' , 'New Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Edit Pengunjung</div>
        </h1>

        <!-- Page Content -->
        <div class="content">
            <form action="/reservasi/{{$reservasi->id}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <input type="hidden" id="user_id" name="user_id" value="{{$reservasi->user_id}}">
                            <input type="hidden" id="pemesan" name="pemesan" value="{{$reservasi->pemesan}}">
                            <input type="hidden" id="email" name="email" value="{{$reservasi->email}}">
                            <input type="hidden" id="alamat" name="alamat" value="{{$reservasi->alamat}}">
                            <input type="hidden" id="no_hp" name="no_hp" value="{{$reservasi->no_hp}}">
                            <input type="hidden" id="tanggal" name="tanggal" value="{{$reservasi->tanggal}}">
                            <input type="hidden" id="room_type" name="room_type" value="{{$reservasi->room_type}}">
                            <input type="hidden" id="lama_inap" name="lama_inap" value="{{$reservasi->lama_inap}}">
                            <input type="hidden" id="jumlah_harga" name="jumlah_harga" value="{{$reservasi->jumlah_harga}}">
                            <div class="form-group">
                                <select name="status" class="form-control" required>
                                    <option value="">Pilih status</option>
                                    @if ($reservasi->status == "Pesan")
                                    <option value="Di Pesan">Di pesan</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-primary btn-circle " style="float:left"><span class="far fa-edit"> </span> Ubah Status</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>



        </div>
        <section>
            <!-- END Page Content -->
</div>
<!-- END Main Container -->
@endsection