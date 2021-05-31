@extends('admin.form.create.layout')

@section('title' , 'New Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Tambah Pengunjung</div>
        </h1>

        <!-- Page Content -->
        <div class="content">
            <form action="{{route ('create/tamu')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">

                            <div class="block-content">
                                <div class="form-group">
									<label for="tamu"><strong>Nama Tamu</strong></label>
                                    <input type="text" name="nama_tamu" id="tamu" class="form-control" placeholder="Masukkan Nama Tamu" required>
                                </div>
								<div class="form-group">
									<label for="email"><strong>Email</strong></label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
                                </div>
								<div class="form-group">
									<label for="alamat"><strong>Alamat</strong></label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required>
                                </div>
								<div class="form-group">
									<label for="no_hp"><strong>No Handphone</strong></label>
                                    <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan No Handphone" required>
                                </div>
								<div class="form-group">
									<button type="submit" class="btn btn-success">Tambah data</button>
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