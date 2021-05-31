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
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Pemesan</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th>Kamar</th>
                                        <th>No Reservasi</th>
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
                                            <form action="/reservasi/{{$reservasi->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    

                                </table>
                            </div>
                        </div>


                        @endsection