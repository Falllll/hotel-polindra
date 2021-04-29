@extends('admin.form.create.layout')

@section('title', 'Create | Menu')

@section('link')


	<div class="create">
		
		<div class="container-create">
			<div class="create-pic js-tilt" data-tilt>
				<img src="/form/images/img-02.jpg" alt="IMG">
			</div>

			<form class="create-form" action="/menu/{{$menu->id}}" method="post">
				@method('PUT')
				@csrf
				<span class="create-form-title">
					Tambah Menu
				</span>

				<div class="wrap-input1">
					<input class="input1" type="text" name="nama_makanan" value="{{$menu->nama_makanan}}" placeholder="Nama Makanan">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="gambar" value="{{$menu->gambar}}" placeholder="Gambar">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="jam" value="{{$menu->jam}}" placeholder="Jam">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="desc" value="{{$menu->desc}}" placeholder="Deskripsi Makanan">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="harga" value="{{$menu->harga}}" placeholder="Harga">
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