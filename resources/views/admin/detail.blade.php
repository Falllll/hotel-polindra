@extends('admin.layout')

@section('title' , 'Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Detail Reservasi</div>
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
                                        <th>Nama Pemesan</th>
                                        <th>No Reservasi</th>
                                        <th>lama Inap</th>
                                        <th>Tanggal dipesan</th>
                                        <th>Jumlah Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <tr>
                                    
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>

                                        <td>
                                            <form action="/reservasi/1" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    

                                </table>
                            </div>
                        </div>


                        @endsection