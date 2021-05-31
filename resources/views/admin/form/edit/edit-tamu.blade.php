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
            <form action="/tamu/{{$tamu->id}}" method="post" enctype="multipart/form-data">
                @method('PUT')
				@csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">

                            <div class="block-content">
                                <div class="form-group">
									<label for="tamu"><strong>Nama Tamu</strong></label>
                                    <input type="text" name="nama_tamu" id="tamu" class="form-control" placeholder="Masukkan Nama Tamu" required value="{{$tamu->nama_tamu}}">
                                </div>
								<div class="form-group">
									<label for="email"><strong>Email</strong></label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email" required value="{{$tamu->email}}">
                                </div>
								<div class="form-group">
									<label for="alamat"><strong>Alamat</strong></label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required value="{{$tamu->alamat}}">
                                </div>
								<div class="form-group">
									<label for="no_hp"><strong>No Handphone</strong></label>
                                    <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan No Handphone" required value="{{$tamu->no_hp}}">
                                </div>
								<div class="form-group">
									<button type="submit" class="btn btn-success">Ubah data</button>
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