@extends('admin.form.create.layout')

@section('title' , 'New Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Tambah Staff</div>
        </h1>

        <!-- Page Content -->
        <div class="content">
            <form action="{{route ('create/staff')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">

                            <div class="block-content">
                                <div class="form-group">
                                    <label for="staff"><strong>Nama staff</strong></label>
                                    <input type="text" name="nama" id="staff" class="form-control" placeholder="Masukkan Nama staff" required>
                                </div>
                                <div class="form-group">
                                    <label for="umur"><strong>Umur</strong></label>
                                    <input type="number" name="umur" id="umur" class="form-control" placeholder="Masukkan Umur" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat"><strong>Alamat</strong></label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required>
                                </div>
                                <div class="form-group">
                                    <select name="status" class="form-control" required>
                                        <option value="">Pilih status bekerja</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                        <option value="Cuti">Cuti</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan"><strong>Jabatan</strong></label>
                                    <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan Jabatan" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-primary btn-circle " style="float:left"><span class="fas fa-plus"> </span> Tambah Data</button>
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