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

                                        <td>{{$i++}}</td>
                                        <td>{{$slider->gambar}}</td>
                                        <td>{{$slider->caption}}</td>

                                        <td>
                                            <a href="/slider/{{$slider->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                            <form action="/slider/{{$slider->id}}" method="post">
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