@extends('admin.layout')

@section('title' , 'Categories | Admin')

@section('container')

<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Categories</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <button class="btn btn-primary" id="btn-add-new"><span class="fa fa-plus"></span> Add New</button>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="align-items: center;">
                                    <tr>

                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($categories as $kategori)
                                    <tr>

                                        <td>{{$i++}}</td>
                                        <td>{{$kategori->kategori_nama}}</td>

                                        <td>
                                            <a href="#" class="btn btn-success btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    @endforeach
                                    
                                </table>
                            </div>
                        </div>

                        <form action="" method="post">
                            <div class="modal" id="ModalAddNew" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="block block-themed block-transparent mb-0">
                                            <div class="block-header bg-primary-dark">
                                                <h3 class="block-title">Add New</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                        <i class="si si-close"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="block-content">
                                                <div class="form-group">
                                                    <input type="text" name="xkategori" class="form-control" placeholder="Kategori" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default btn-square" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary btn-square">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#mytable').DataTable();

                                //Show Modal Add New
                                $('#btn-add-new').on('click', function() {
                                    $('#ModalAddNew').modal('show');
                                });

                                //Show Modal Update Kategori
                                $('.btn-edit').on('click', function() {
                                    var kategori_id = $(this).data('id');
                                    var kategori_nama = $(this).data('kategori');
                                    $('#ModalUpdate').modal('show');
                                    $('[name="xkode"]').val(kategori_id);
                                    $('[name="xkategori2"]').val(kategori_nama);
                                });

                                //Show Konfirmasi modal hapus record
                                $('.btn-hapus').on('click', function() {
                                    var kategori_id = $(this).data('id');
                                    $('#Modalhapus').modal('show');
                                    $('[name="kode"]').val(kategori_id);
                                });

                            });
                        </script>
                        @endsection