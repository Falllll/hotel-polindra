@extends('admin.layout')

@section('title' , 'Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Facilities</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <a href="{{url('/create/facility')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Gambar</th>
                                        <th>Deskripsi</th>

                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($facilitiess as $fasilitas)
                                    <tr>

                                        <td>{{$i++}}</td>
                                        <td>{{$fasilitas->nama}}</td>
                                        <td>
                                            <img src="{{asset('img/fasilitas/'. $fasilitas->gambar)}}" height="100" width="100" alt="">
                                        </td>
                                        <td>{{$fasilitas->desc}}</td>

                                        <td>
                                            <a href="/fasilitas/{{$fasilitas->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                            <form action="/fasilitas/{{$fasilitas->id}}" method="post">
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