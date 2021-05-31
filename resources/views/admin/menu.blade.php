@extends('admin.layout')

@section('title' , 'Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Menu</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <a href="{{url('/create/menu')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Name</th>
                                        <th>Time</th>
                                        <th>Description</th>
                                        <th>Price</th>

                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($menus as $menu)
                                    <tr>

                                        <td>{{$i++}}</td>
                                        <td>
                                            <img src="{{asset('img/menu/'. $menu->gambar)}}" height="100" width="100" alt="Foto makanan">
                                        </td>
                                        <td>{{$menu->nama_makanan}}</td>
                                        <td>{{$menu->jam}}</td>
                                        <td>{{$menu->desc}}</td>
                                        <td>{{$menu->harga}}</td>


                                        <td>
                                            <a href="/menu/{{$menu->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                            <form action="/menu/{{$menu->id}}" method="post">
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