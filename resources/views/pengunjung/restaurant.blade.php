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
<!-- Hero Section End -->
<!-- RESTAURANTS -->


@endsection