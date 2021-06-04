@extends('admin.layout')

@section('title' , 'Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Reservasi</div>
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
                                        <th>No HP</th>
                                        <th>Tanggal Inap</th>
                                        <th>Tipe kamar</th>
                                        <th>Lama Inap</th>
                                        <th>Biaya</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($reservations as $reservasi)
                                    <tr>

                                        <td style="vertical-align: middle;">{{$i++}}</td>
                                        <td style="vertical-align: middle;">{{$reservasi->pemesan}}</td>
                                        <td style="vertical-align: middle;">{{$reservasi->email}}</td>
                                        <td style="vertical-align: middle;">{{$reservasi->no_hp}}</td>
                                        <td style="vertical-align: middle;">{{$reservasi->tanggal}}</td>
                                        <td style="vertical-align: middle;">{{$reservasi->room_type}}</td>
                                        <td style="vertical-align: middle;">{{$reservasi->lama_inap}} Hari</td>
                                        <td style="vertical-align: middle;">{{$reservasi->jumlah_harga}}</td>
                                        <td style="vertical-align: middle; color: red; font-weight: bold;">{{$reservasi->status}}</td>
                                        <td style="width: 120px;text-align: center;vertical-align: middle; ">
                                            <a href="/reservasi/{{$reservasi->id}}/edit" class="btn btn-sm btn-primary btn-circle " style="float:left"><i class="far fa-calendar-check"></i></a>
                                            <form action="/reservasi/{{$reservasi->id}}" method="post">
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