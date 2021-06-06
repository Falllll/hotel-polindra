@extends('admin.form.create.layout')

@section('title' , 'New Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Edit Staff</div>
        </h1>

        <!-- Page Content -->
        <div class="content">
            <form action="/staff/{{$staff->id}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">

                            <div class="block-content">
                                <div class="form-group">
                                    <label for="staff"><strong>Nama staff</strong></label>
                                    <input type="text" name="nama" id="staff" class="form-control" placeholder="Masukkan Nama staff" required value="{{$staff->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="umur"><strong>Umur</strong></label>
                                    <input type="number" name="umur" id="umur" class="form-control" placeholder="Masukkan Umur" required value="{{$staff->umur}}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat"><strong>Alamat</strong></label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required value="{{$staff->alamat}}">
                                </div>
                                <div class="form-group">
                                    <select name="status" class="form-control" required value="{{$staff->status}}">
                                        <option value="">Pilih status bekerja</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                        <option value="Cuti">Cuti</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan"><strong>Jabatan</strong></label>
                                    <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan Jabatan" required value="{{$staff->jabatan}}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-primary btn-circle " style="float:left"><span class="fas fa-plus"> </span> Ubah Data</button>
                                </div>
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