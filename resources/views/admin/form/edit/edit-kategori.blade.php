@extends('admin.form.create.layout')

@section('title', 'Edit | Kategori')

@section('link')


	<div class="create">
		
		<div class="container-create">
			<div class="create-pic js-tilt" data-tilt>
				<img src="/form/images/img-02.jpg" alt="IMG">
			</div>

			<form class="create-form" action="/kategori/{{$kategori->id}}" method="post">
				@method('PUT')
				@csrf
				<span class="create-form-title">
					Edit Kategori
				</span>

				<div class="wrap-input1">
					<input class="input1" type="text" name="kategori_nama" value="{{$kategori->kategori_nama}}" placeholder="Nama Kategori">
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