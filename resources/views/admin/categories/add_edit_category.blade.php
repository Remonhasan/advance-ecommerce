@extends('layouts.admin_layout.admin_layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Catalogues</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <form name="categoryForm" id="CategoryForm" action="{{ url('admin/add-edit-category') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Add Category</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_name">Category Name</label>
                                    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category Name">
                                </div>
                                <div class="form-group">
                                    <label>Select Category Level</label>
                                    <select name="parent_id" id="parent_id" class="form-control select2" style="width: 100%;">
                                        <option value="0">Main Category</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Section</label>
                                    <select name="section_id" name="section_id" class="form-control select2" style="width: 100%;">
                                        <option value="">Select</option>
                                        @foreach($getSections as $section)
                                            <option>{{ $section->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Category Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="category_image" name="category_image">
                                            <label class="custom-file-label" for="category_image">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="category_name">Category Discount</label>
                                    <input type="text" class="form-control" id="category_discount" name="category_discount" placeholder="Enter Category Discount">
                                </div>
                                <div class="form-group">
                                    <label for="category_name">Category Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="category_name">Category URL</label>
                                    <input type="text" class="form-control" id="url" name="url" placeholder="Enter Category Description">
                                </div>
                                <div class="form-group">
                                    <label for="category_name">Mata Title</label>
                                    <textarea name="meta_title" id="meta_title" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="category_name">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="category_name">Mata Keywords</label>
                                    <textarea name="meta_keywords" id="meta_keywords" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="card-footer">
                       <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
            </div><!-- /.container-fluid -->
        </section>

    </div>
    <!-- /.content-wrapper -->
@endsection
