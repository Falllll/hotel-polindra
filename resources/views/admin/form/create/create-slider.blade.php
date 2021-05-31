@extends('admin.form.create.layout')

@section('title' , 'New Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Tambah data kamar</div>
        </h1>

        <!-- Page Content -->
        <div class="content">
            <form action="{{route ('create/slider')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">

                            <div class="block-content">
                                <div class="form-group">
									<label for="caption"><strong>Caption</strong></label>
                                    <input type="text" name="caption" id="caption" class="form-control" placeholder="Masukkan Caption" required>
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