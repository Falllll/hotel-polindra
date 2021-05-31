@extends('admin.form.create.layout')

@section('title' , 'New Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Edit data kamar</div>
        </h1>

        <!-- Page Content -->
        <div class="content">
            <form action="{{url ('/room', $room->id)}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">

                            <div class="block-content">
                                <div class="form-group">
									<label for="tipekamar"><strong>Tipe Kamar</strong></label>
                                    <input type="text" name="room_type" id="tipekamar" class="form-control" placeholder="Tipe Kamar" required value="{{$room->room_type}}">
                                </div>
								<div class="form-group">
									<label for="stok"><strong>Stok</strong></label>
                                    <input type="text" name="stok" id="stok" class="form-control" placeholder="Sisa kamar" required value="{{$room->stok}}">
                                </div>
								<div class="form-group">
									<label for="price"><strong>Harga Kamar</strong></label>
                                    <input type="text" name="price" id="price" class="form-control" placeholder="Harga kamar per malam" required value="{{$room->price}}">
                                </div>
									<label for="desc"><strong>Deskripsi kamar</strong></label>
								<div class="form-group">
                                    <textarea  type="text" name="desc" id="desc" cols="70%" rows="3" placeholder="Deskripsi kamar" required>{{$room->desc}}</textarea>
                                </div>
								<label for="gambar">Pilih Foto</label>
								<div class="form-group">
									
									<input type="file" name="gambar" id="gambar" class="dropify" data-height="190" required>
								</div>
                                <div class="form-group">
									<img src="{{ asset('img/room/'.$room->gambar)}}" height="10%" width="30%" alt="">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-success">Edit data</button>
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