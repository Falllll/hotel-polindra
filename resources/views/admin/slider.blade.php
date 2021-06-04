@extends('admin.layout')

@section('title' , 'Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Images Slider</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <a href="{{url('/create/slider')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">

                                    <tr>
                                        <th>No</th>
                                        <th>Images</th>
                                        <th>Caption</th>

                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($sliders as $slider)
                                    <tr>

                                        <td style="vertical-align: middle;">{{$i++}}</td>
                                        <td style="vertical-align: middle;"><img src="{{asset('img/room-slider/'. $slider->gambar)}}" width="120" alt="Foto kamar"></td>
                                        <td style="vertical-align: middle;">{{$slider->caption}}</td>

                                        <td style="width: 120px;text-align: center;vertical-align: middle; ">
                                            <a href="/slider/{{$slider->id}}/edit" class="btn btn-sm btn-primary btn-circle " style="float:left"><i class="far fa-edit"></i></a>
                                            <form action="/slider/{{$slider->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary btn-circle" style="float:right" onclick="return confirm('anda yakin ingin menghapus data?');"><span class="far fa-trash-alt"></span></button>
                                                <!-- <input type="submit" class="btn btn-primary btn-sm mt-2 " value="Delete" onclick="return confirm('anda yakin ingin menghapus data?');"> -->
                                            </form>
                                        </td>
                                    </tr>

                                    @endforeach


                                </table>
                            </div>
                        </div>


                        @endsection