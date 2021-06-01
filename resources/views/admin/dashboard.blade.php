@extends('admin.layout')

@section('title' , 'Dashboard | Admin')

@section('container')

<div class="main-content">
  <section class="section">
    <h1 class="section-header">
      <div>Dashboard</div>
    </h1>
    <!-- Row -->
    <div class="row">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-primary">
            <i class="ion ion-person"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pengguna</h4>
            </div>
            <div class="card-body">
              {{$admin}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-success">
            <i class="ion ion-ios-paper-outline"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Reservasi</h4>
            </div>
            <div class="card-body">
              {{$reservasi}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-warning">
            <i class="fa fa-building"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Tipe Kamar</h4>
            </div>
            <div class="card-body">
              {{$kamar}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-info">
            <i class="ion ion-person"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Tamu</h4>
            </div>
            <div class="card-body">
              {{$tamu}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-danger">
            <i class="fa fa-envelope"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Inbox</h4>
            </div>
            <div class="card-body">
              {{$inbox}}
            </div>
          </div>
        </div>
      </div>
      <!-- End Row -->
    </div>



  </section>

</div>

@endsection