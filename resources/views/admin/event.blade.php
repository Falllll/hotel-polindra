@extends('admin.layout')

@section('title' , 'Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Event</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <a href="{{url('/create/event')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Event</th>
                                        <th>Jadwal</th>

                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($events as $event)
                                    <tr>

                                        <td>{{$i++}}</td>
                                        <td>{{$event->event_name}}</td>
                                        <td>{{$event->tanggal_event}}</td>

                                        <td>
                                            <a href="/event/{{$event->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                            <form action="/event/{{$event->id}}" method="post">
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