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
    <div class="container">
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="img/trisula/Suite-room/1.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Suite-room/2.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Suite-room/3.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Suite-room/4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Suite Room</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>$99</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mauris, bibendum
                                eget sapien ac, ultrices rhoncus ipsum.</p>
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
                        <a href="{{url('/pesan')}}" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="img/trisula/Superior-room/1.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Superior-room/2.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Superior-room/3.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Superior-room/4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Superior Room</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>$179</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mauris, bibendum
                                eget sapien ac, ultrices rhoncus ipsum.</p>
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
                        <a href="{{url('/pesan')}}" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="img/trisula/Deluxe-room/1.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Deluxe-room/2.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Deluxe-room/3.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Deluxe-room/4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Deluxe Room</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>$252</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mauris, bibendum
                                eget sapien ac, ultrices rhoncus ipsum.</p>
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
                        <a href="{{url('/pesan')}}" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="img/trisula/Executive-room/1a.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Executive-room/2a.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Executive-room/3a.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Executive-room/4a.jpg" alt="">
                        </div>
                        <div class="single-room-pic">
                            <img src="img/trisula/Executive-room/5a.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Executive Room</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>$99</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mauris, bibendum
                                eget sapien ac, ultrices rhoncus ipsum.</p>
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
                        <a href="{{url('/pesan')}}" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->

@endsection