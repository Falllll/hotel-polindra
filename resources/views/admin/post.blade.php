@extends('admin.layout')

@section('title' , 'Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Post List</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <a href="{{ url('/newpost') }}" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                    </div>
                    <div class="card">
                        <!-- <div class="card-header">
                            <h4>Simple Table</h4>
                        </div> -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Tanggal</th>
                                        <th>Kategori</th>
                                        <th>Bahasa</th>
                                        <th>Views</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <tr>
                                        <td><img src="img/room-footer-pic/room-1.jpg" alt="" style="height:40px;width:80px;">
                                        </td>

                                        <td>Room Hotel Beutiful</td>
                                        <td>16/04/2021</td>
                                        <td>Interior</td>
                                        <td>Id</td>
                                        <td>5</td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>


                        @endsection