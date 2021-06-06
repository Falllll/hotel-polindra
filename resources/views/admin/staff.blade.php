@extends('admin.layout')

@section('title' , 'Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Daftar staff</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <a href="{{url('/create/staff')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama staff</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($staffs as $staff)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$i++}}</td>
                                        <td style="vertical-align: middle;">{{$staff->nama}}</td>
                                        <td style="vertical-align: middle;">{{$staff->umur}}</td>
                                        <td style="vertical-align: middle;">{{$staff->alamat}}</td>
                                        <td style="vertical-align: middle;">{{$staff->status}}</td>
                                        <td style="vertical-align: middle;">{{$staff->jabatan}}</td>

                                        <td style="width: 120px;text-align: center;vertical-align: middle; ">
                                            <a href="/staff/{{$staff->id}}/edit" class="btn btn-sm btn-primary btn-circle " style="float:left"><i class="far fa-edit"></i></a>
                                            <form action="/staff/{{$staff->id}}" method="post">
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