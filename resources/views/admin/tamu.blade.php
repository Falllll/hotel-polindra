@extends('admin.layout')

@section('title' , 'Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Daftar Tamu</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <a href="{{url('/create/tamu')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Tamu</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($pengunjungs as $tamu)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$tamu->nama_tamu}}</td>
                                        <td>{{$tamu->email}}</td>
                                        <td>{{$tamu->alamat}}</td>
                                        <td>{{$tamu->no_hp}}</td>

                                        <td>
                                            <a href="/tamu/{{$tamu->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                            <form action="/tamu/{{$tamu->id}}" method="post">
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