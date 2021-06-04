@extends('admin.form.create.layout')

@section('title' , 'New Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Edit Data Fasilitas</div>
        </h1>

        <!-- Page Content -->
        <div class="content">
            <form action="{{url ('/fasilitas', $fasilitas->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">

                            <div class="block-content">
                                <div class="form-group">
                                    <label for="nama"><strong>Nama Fasilitas</strong></label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Fasilitas" required value="{{$fasilitas->nama}}">
                                </div>
                                <label for="desc"><strong>Deskripsi Fasilitas</strong></label>
                                <div class="form-group">
                                    <textarea type="text" name="desc" id="desc" cols="70%" rows="3" placeholder="Deskripsi Fasilitas" required>{{$fasilitas->desc}}</textarea>
                                </div>
                                <label for="gambar">Pilih Foto</label>
                                <div class="form-group">
                                    <input type="file" name="gambar" id="gambar" class="dropify" data-height="190" required>
                                </div>
                                <div class="form-group">
                                    <img src="{{ asset('img/fasilitas/'.$fasilitas->gambar)}}" height="10%" width="30%" alt="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-primary btn-circle " style="float:left"><span class="far fa-edit"> </span>Edit Data</button>
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