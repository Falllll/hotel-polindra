@extends('admin.form.create.layout')

@section('title', 'Edit | Kamar')

@section('link')


	<div class="create">
		
		<div class="container-create">
			<div class="create-pic js-tilt" data-tilt>
				<img src="/form/images/img-02.jpg" alt="IMG">
			</div>

			<form class="create-form" action="/room/{{$room->id}}" method="post">
				@method('PUT')
				@csrf
				<span class="create-form-title">
					Edit Kamar
				</span>

				<div class="wrap-input1">
					<input class="input1" type="text" name="images1" value="{{$room->images1}}" placeholder="Gambar 1">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="images2" value="{{$room->images2}}" placeholder="Gambar 2">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="images3" value="{{$room->images3}}" placeholder="Gambar 3">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="images4" value="{{$room->images4}}" placeholder="Gambar 4">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="room_type" value="{{$room->room_type}}" placeholder="Tipe Kamar">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="price" value="{{$room->price}}" placeholder="Harga">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="desc" value="{{$room->desc}}" placeholder="Deskripsi Kamar">
					<span class="shadow-input1"></span>
				</div>
				<div class="container-create-form-btn">
					<button class="create-form-btn">
						<span>
							Save
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>

			</form>
		</div>
	</div>

@endsection