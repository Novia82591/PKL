@extends('Admin.Layout.master')

@section('content')

        @include('Admin.Layout.navbar')
        @include('Admin.Layout.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-5">

                            <div class="card card-widget widget-user-2">

                                <div class="widget-user-header bg-primary">
                                    <div class="widget-user-image">
                                        <img src="/template/frontend/images/yanuar.jpg">
                                    </div>

                                    <h3 class="widget-user-username">Yanuar Sahrul Ramadhan</h3>
                                    <h5 class="widget-user-desc">Admin</h5>
                                </div>
                                
                            </div>

                        </div>
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


        </div>
        @include('Admin.Layout.footer')
        @include('Admin.Layout.script')
        @endsection