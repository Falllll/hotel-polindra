@extends('admin.form.create.layout')

@section('title' , 'New Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Tambah Menu Makanan</div>
        </h1>

        <!-- Page Content -->
        <div class="content">
            <form action="{{route ('create/menu')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">

                            <div class="block-content">
                                <div class="form-group">
									<label for="nama_makanan"><strong>Nama Makanan</strong></label>
                                    <input type="text" name="nama_makanan" id="nama_makanan" class="form-control" placeholder="Masukkan Nama Makanan" required>
                                </div>
								<div class="form-group">
									<label for="harga"><strong>Harga</strong></label>
                                    <input type="number" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga" required>
                                </div>
								<label for="desc"><strong>Deskripsi Makanan</strong></label>
								<div class="form-group">
                                    <textarea  type="text" name="desc" id="desc" cols="70%" rows="3" placeholder="Deskripsi Fasilitas" required></textarea>
                                </div>
								<label for="gambar">Pilih Foto</label>
								<div class="form-group">
									<input type="file" name="gambar" id="gambar" class="dropify" data-height="190" required>
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