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
                                        <th>Gambar 1</th>
                                        <th>Gambar 2</th>
                                        <th>Gambar 3</th>
                                        <th>Gambar 4</th>
                                        <th>Tipe kamar</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>

                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($rooms as $room)
                                    <tr>

                                        <td>{{$i++}}</td>
                                        <td>
                                            <img src="{{asset('img/room/'. $room->gambar_1)}}" height="100" width="100" alt="Foto kamar">
                                        </td>
                                        <td>
                                            <img src="{{asset('img/room/'. $room->gambar_2)}}" height="100" width="100" alt="Foto kamar">
                                        </td>
                                        <td>
                                            <img src="{{asset('img/room/'. $room->gambar_3)}}" height="100" width="100" alt="Foto kamar">
                                        </td>
                                        <td>
                                            <img src="{{asset('img/room/'. $room->gambar_4)}}" height="100" width="100" alt="Foto kamar">
                                        </td>
                                        <td>{{$room->room_type}}</td>
                                        <td>{{$room->stok}}</td>
                                        <td>Rp. {{number_format($room->price)}}</td>
                                        <td>{{$room->desc}}</td>

                                        <td>
                                            <a href="/room/{{$room->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                            <form action="/room/{{$room->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('anda yakin ingin menghapus data?');">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    

                                </table>
                            </div>
                        </div>


                        @endsection