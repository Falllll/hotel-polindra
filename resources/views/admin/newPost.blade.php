@extends('admin.layout')

@section('title' , 'New Post | Admin')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">

        <!-- Page Content -->
        <div class="content">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Add New Post</h3>
                            </div>
                            <div class="block-content">
                                <div class="form-group">
                                    <input type="text" name="xjudul" class="form-control" placeholder="Post Title" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="xslug" class="form-control" placeholder="URL Permalink, contoh: ini-adalah-url" style="background-color: #F8F8F8;outline-color: none;border:0;color:blue;" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="xisi" id="ckeditor" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Publish</h3>
                            </div>
                            <div class="block-content">
                                <div class="form-group">
                                    <input type="file" name="filefoto" class="dropify" data-height="190" required>
                                </div>
                                <div class="form-group">
                                    <select name="xkategori" class="form-control" required>
                                        <option value="">Categories</option>

                                        <option value=""></option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="xlang" class="form-control" required>
                                        <option value="id">Indonesia (ID)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-md bg-body-light">
                                <button type="submit" class="btn btn-primary btn-square btn-block">PUBLISH</button>
                            </div>
                        </div>
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Meta Description</h3>
                            </div>
                            <div class="block-content">
                                <div class="form-group">
                                    <textarea class="form-control" name="xdeskripsi" rows="5" placeholder="Input Meta Description for SEO"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </form>



        </div>
        <section>
            <!-- END Page Content -->
</div>
<!-- END Main Container -->
@endsection