@extends('pengunjung.layout')

@section('title' , 'Restaurants | Hotel')

@section('container')
<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="img/rs.png">
    <div class="hero-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Restaurant</h1>
                </div>
            </div>
            <div class="page-nav">
                <a href="{{ url('/rooms') }}" class="left-nav"><i class="lnr lnr-arrow-left"></i> Rooms</a>
                <a href="{{ url('/contact') }}" class="right-nav">Contact <i class="lnr lnr-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<div class="facilities-section spad">
    <div class="container">
        <div class="facilities-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h1 style="font-size: 60px;">Restaurants</h1>
                    </div>
                </div>

                <div class="col-md-3 p-0 ">
                    <div class="card" style="width: 18rem;">
                        <img src="img/trisula/gallery29a.jpg" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-0">
                    <div class="card" style="width: 18rem;">
                        <img src="img/trisula/gallery29a.jpg" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->
<!-- RESTAURANTS -->


@endsection