@extends('pengunjung.layout')

@section('title' , 'Rooms | Hotel')

@section('container')
<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="img/rooms-bg.jpg">
    <div class="hero-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Rooms</h1>
                </div>
            </div>
            <div class="page-nav">
                <a href="{{ url('/service') }}" class="left-nav"><i class="lnr lnr-arrow-left"></i> Services</a>
                <a href="{{ url('/news') }}" class="right-nav">News <i class="lnr lnr-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Rooms Section Begin -->
<section class="room-section spad">
    @foreach ($rooms as $room)
    <div class="container">
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('img/room/'.$room->gambar_1)}}" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="{{ asset('img/room/'.$room->gambar_2)}}" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="{{ asset('img/room/'.$room->gambar_3)}}" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="{{ asset('img/room/'.$room->gambar_4)}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h3>{{$room->room_type}}</h2>
                            <div class="room-price">
                                <span>Harga  </span>
                                <h3>Rp. {{number_format($room->price)}}</h3>
                                <sub>  /malam</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>{{$room->desc}}</p>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <i class="flaticon-019-television"></i>
                                <span>Smart TV</span>
                            </div>
                            <div class="room-info">
                                <i class="flaticon-029-wifi"></i>
                                <span>High Wi-fii</span>
                            </div>
                            <div class="room-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <span>AC</span>
                            </div>
                            <div class="room-info">
                                <i class="flaticon-036-parking"></i>
                                <span>Parking</span>
                            </div>
                            <div class="room-info last">
                                <i class="flaticon-007-swimming-pool"></i>
                                <span>Pool</span>
                            </div>
                        </div>
                        <a href="{{url('pesan')}}/{{$room->id}}" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        <span>Sisa kamar : </span>
                        <span>{{$room->stok}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
</section>
<!-- Rooms Section End -->

@endsection