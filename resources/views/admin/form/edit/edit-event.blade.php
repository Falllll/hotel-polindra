@extends('admin.form.create.layout')

@section('title', 'Create | Event')

@section('link')


	<div class="create">
		
		<div class="container-create">
			<div class="create-pic js-tilt" data-tilt>
				<img src="/form/images/img-02.jpg" alt="IMG">
			</div>

			<form class="create-form" action="/event/{{$event->id}}" method="post">
				@method('PUT')
				@csrf
				<span class="create-form-title">
					Tambah Event
				</span>

				<div class="wrap-input1">
					<input class="input1" type="text" name="event_name" value="{{$event->event_name}}" placeholder="Nama Event">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="tanggal_event" value="{{$event->tanggal_event}}" placeholder="Tanggal">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1">
					<input class="input1" type="text" name="jam_event" value="{{$event->jam_event}}" placeholder="Jam ">
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