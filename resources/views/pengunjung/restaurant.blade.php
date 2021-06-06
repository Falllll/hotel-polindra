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

                @foreach ($restaurants as $restaurant)
                <div class="col-md-3 p-0 ">
                    <div class="card" style="width: 18rem; height: 22rem; ">
                        <img height="210" src="{{ asset('img/menu/'.$restaurant->gambar)}}" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="mt-2 text-center">{{$restaurant->nama_makanan}}</h4>

                            <!-- <p class="card-text "><small class="text-muted">{{$restaurant->desc}}</small></p> -->

                            <h4 class="text-center text-danger pt-3" style="font-size: 20px;">Rp.{{$restaurant->harga}}</h4>

                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>

        <div class="pull-left mt-5">
            {{ $restaurants->links() }}
        </div>
    </div>

</div>

<!-- Hero Section End -->
<!-- RESTAURANTS -->


@endsection