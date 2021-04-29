@extends('admin.layout')

@section('title' , 'Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Inbox</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <!-- <a href="#" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a> -->
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>

                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($contacts as $contact)
                                    <tr>

                                        <td>{{$i++}}</td>
                                        <td>{{$contact->created_at}}</td>
                                        <td>{{$contact->nama}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->message}}</td>

                                        <td>
                                            <form action="/contact/{{$contact->id}}" method="post">
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