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

                                        <td style="vertical-align: middle;">{{$i++}}</td>
                                        <td style="vertical-align: middle;">
                                            <img src="{{asset('img/room/'. $room->gambar_1)}}" width="100" alt="Foto kamar">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <img src="{{asset('img/room/'. $room->gambar_2)}}" width="100" alt="Foto kamar">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <img src="{{asset('img/room/'. $room->gambar_3)}}" width="100" alt="Foto kamar">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <img src="{{asset('img/room/'. $room->gambar_4)}}" width="100" alt="Foto kamar">
                                        </td>
                                        <td style="vertical-align: middle;">{{$room->room_type}}</td>
                                        <td style="vertical-align: middle;">{{$room->stok}}</td>
                                        <td style="vertical-align: middle;">Rp. {{number_format($room->price)}}</td>
                                        <td style="vertical-align: middle;">{{$room->desc}}</td>

                                        <td style="width: 120px;text-align: center;vertical-align: middle; ">
                                            <a href="/room/{{$room->id}}/edit" class="btn btn-sm btn-primary btn-circle " style="float:left"><i class="far fa-edit"></i></a>
                                            <form action="/room/{{$room->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary btn-circle" style="float:right" onclick="return confirm('anda yakin ingin menghapus data?');"><span class="far fa-trash-alt"></span></button>
                                                <!-- <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('anda yakin ingin menghapus data?');"> -->
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach


                                </table>
                            </div>
                        </div>


                        @endsection