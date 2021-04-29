@extends('admin.form.create.layout')

@section('title', 'Create | Fasilitas')

@section('link')


	<div class="create">
		
		<div class="container-create">
			<div class="create-pic js-tilt" data-tilt>
				<img src="/form/images/img-02.jpg" alt="IMG">
			</div>

			<form class="create-form" action="/fasilitas/{{$fasilitas->id}}" method="post">
				@method('PUT')
				@csrf
				<span class="create-form-title">
					Tambah Fasilitas
				</span>

				<div class="wrap-input1">
					<input class="input1" type="text" name="nama" value="{{$fasilitas->nama}}" placeholder="Nama Fasilitas">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="gambar" value="{{$fasilitas->gambar}}" placeholder="Foto Fasilitas">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="desc" value="{{$fasilitas->desc}}" placeholder="Deskripsi Fasilitas">
					<span class="shadow-input1"></span>
				</div>
				<div class="container-create-form-btn">
					<button class="create-form-btn">
						<span>
							Tambah
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>

			</form>
		</div>
	</div>

@endsection