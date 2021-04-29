@extends('admin.layout')

@section('title' , 'Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Rooms</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <a href="{{url('/create/room')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Images 1</th>
                                        <th>Images 2</th>
                                        <th>Images 3</th>
                                        <th>Images 4</th>
                                        <th>Tipe Room</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>

                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($rooms as $room)
                                    <tr>

                                        <td>{{$i++}}</td>
                                        <td>{{$room->images1}}</td>
                                        <td>{{$room->images2}}</td>
                                        <td>{{$room->images3}}</td>
                                        <td>{{$room->images4}}</td>
                                        <td>{{$room->room_type}}</td>

                                        <td>{{$room->price}}</td>
                                        <td>{{$room->desc}}</td>

                                        <td>
                                            <a href="/room/{{$room->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    

                                </table>
                            </div>
                        </div>


                        @endsection