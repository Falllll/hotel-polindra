@extends('pengunjung.layout')

@section('title', 'Facilities | Hotel')

@section('container')
<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="img/services-bg.jpg">
    <div class="hero-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Facilities</h1>
                </div>
            </div>
            <div class="page-nav">
                <a href="{{ url('/about') }}" class="left-nav"><i class="lnr lnr-arrow-left"></i> About</a>
                <a href="{{ url('/room') }}" class="right-nav">Rooms <i class="lnr lnr-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
<!-- Facilities Section Begin -->
<div class="facilities-section spad">
    <div class="container">
        <div class="facilities-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h1 style="font-size: 60px;">Facilities</h1>
                    </div>
                </div>

                @foreach ($services as $service)
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6 p-0">
                            <div class="facilities-img set-bg" data-setbg="{{ asset('img/fasilitas/'.$service->gambar)}}"></div>
                        </div>

                        <div class="col-lg-6 p-0 ">
                            <div class="facilities-text-warp">
                                <div class="facilities-text">
                                    <h2>{{$service->nama}}</h2>
                                    <p>{{$service->desc}}</p>
                                    <a href="{{ url('/contact') }}" class="primary-btn fac-btn">Contact Us <i class="lnr lnr-arrow-right"></i></a>
                                    {{-- <a href="#" class="primary-btn fac-btn">Visit Center <i class="lnr lnr-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="col-lg-6 p-0 order-lg-2 order-1">
                    <div class="facilities-img set-bg" data-setbg="img/trisula/gallery36a.jpg"></div>

                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Facilities Section End -->

<!-- Services Section Begin -->
{{-- <section class="services-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-services-item">
                    <div class="services-pic-item">
                        <img src="img/services/services-1.jpg" alt="">
                    </div>
                    <div class="services-text">
                        <h2>Outdoor Pool</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services-item">
                    <div class="services-pic-item">
                        <img src="img/services/services-2.jpg" alt="">
                    </div>
                    <div class="services-text">
                        <h2>Restaurant</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services-item">
                    <div class="services-pic-item">
                        <img src="img/services/services-5.jpg" alt="">
                    </div>
                    <div class="services-text">
                        <h2>SPA & Wellnes</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services-item">
                    <div class="services-pic-item">
                        <img src="img/services/services-4.jpg" alt="">
                    </div>
                    <div class="services-text">
                        <h2>Coffee Shop</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services-item changed-align">
                    <div class="services-pic-item">
                        <img src="img/services/services-5.jpg" alt="">
                    </div>
                    <div class="services-text">
                        <h2>Executive<br /> Conference<br /> Room</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services-item changed-align">
                    <div class="services-pic-item">
                        <img src="img/services/services-6.jpg" alt="">
                    </div>
                    <div class="services-text">
                        <h2>Events<br /> Conference<br /> Venue</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services-item">
                    <div class="services-pic-item">
                        <img src="img/services/services-7.jpg" alt="">
                    </div>
                    <div class="services-text">
                        <h2>Weddings</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services-item">
                    <div class="services-pic-item">
                        <img src="img/services/services-8.jpg" alt="">
                    </div>
                    <div class="services-text">
                        <h2>Gym</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Services Section End -->

<!-- Services Section End -->
<section class="features-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Features</h2>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-item">
                    <i class="flaticon-043-room-service"></i>
                    <h4>Room Service</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-item">
                    <i class="flaticon-007-swimming-pool"></i>
                    <h4>Pool</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-item">
                    <i class="flaticon-013-safety-box"></i>
                    <h4>Safty Box</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-item">
                    <i class="flaticon-033-dinner"></i>
                    <h4>Restaurant</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-item">
                    <i class="flaticon-029-wifi"></i>
                    <h4>Wi-fi</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-item">
                    <i class="flaticon-003-air-conditioner"></i>
                    <h4>Air Conditioner</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-item">
                    <i class="flaticon-033-dinner"></i>
                    <h4>Restaurant</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-item">
                    <i class="flaticon-020-telephone"></i>
                    <h4>Phone</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-item">
                    <i class="flaticon-019-television"></i>
                    <h4>Smart TV</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-item">
                    <i class="flaticon-040-key-card"></i>
                    <h4>Smart Key</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-item">
                    <i class="flaticon-009-cctv"></i>
                    <h4>24/7 Security</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-item">
                    <i class="flaticon-036-parking"></i>
                    <h4>Free Parking</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

@endsection