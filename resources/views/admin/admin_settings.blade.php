@extends('layouts.admin_layout.admin_layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Settings</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Admin Settings</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Password</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="post" action="{{ url('/admin/update-pwd') }}" name="updatePasswordForm" id="updatePasswordForm">
                               @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin Name</label>
                                        <input type="text" name="admin_name" id="admin_name" class="form-control" value="{{ Auth::guard('admin')->user()->name }}" placeholder="Enter Admin/SubAdmin Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin Email</label>
                                        <input class="form-control" value="{{ Auth::guard('admin')->user()->email }}" readonly="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin Type</label>
                                        <input class="form-control" value="{{ Auth::guard('admin')->user()->type }}" readonly="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Current Password</label>
                                        <input type="password" class="form-control" name="current_pwd" id="current_pwd" placeholder="Enter Current Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New Password</label>
                                        <input type="password" name="new_pwd" id="new_pwd" class="form-control" id="exampleInputPassword1" placeholder="Enter New Password">
                                        <span id="chkCurrentPwd"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm Password</label>
                                        <input type="password" class="form-control" name="confirm_pwd" id="confirm_pwd" placeholder="Confirm New Password">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- /.content-wrapper -->
@endsection
