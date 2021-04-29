@extends('admin.layout')

@section('title' , 'Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Reservation</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <a href="#" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Pemesan</th>
                                        <th>Email</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Room Type</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($reservations as $reservasi)
                                    <tr>
                                    
                                        <td>{{$i++}}</td>
                                        <td>{{$reservasi->pemesan}}</td>
                                        <td>{{$reservasi->email}}</td>
                                        <td>{{$reservasi->check_in}}</td>
                                        <td>{{$reservasi->check_out}}</td>
                                        <td>{{$reservasi->room_type}}</td>
                                        <td>{{$reservasi->status}}</td>

                                        <td>
                                            <a href="#" class="btn btn-success btn-sm">Acc</a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    

                                </table>
                            </div>
                        </div>


                        @endsection