@extends('Admin.Layout.master')

@section('content')

@include('Admin.Layout.navbar')
            @include('Admin.Layout.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3>Tambah Data</h3>
                            </div>


    <div class="container">
        <form action="/simpan-data-mahasiswa" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nim</label><br>
                <input type="text" name="nim" class="form-control">
            </div>
            <label>Nama</label><br>
            <input type="text" name="nama" class="form-control"><br>
            <label>Jenis Kelamin</label><br>
            <select name="jenis_kelamin" class="form-control">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select><br>
            <label>Tempat Lahir</label><br>
            <input type="text" name="tempat_lahir" class="form-control"><br>
            <label>Tanggal Lahir</label><br>
            <input type="date" name="tanggal_lahir" class="form-control"><br>
            <label>Username</label><br>
            <input type="text" name="username" class="form-control"><br>
            <input type="submit" class="btn btn-primary" name="submit" value="Simpan">

        </form>
    </div>
</div>
</div>
</section>
<!-- /.content-wrapper -->


</div>

<footer class="main-footer">
<div class="float-right d-none d-sm-block">
<b>Version</b> 3.2.0
</div>
<strong>create &copy; 2022 <a href="https://yanuar.sr">Yanuar.SR and Novia</a>.</strong> All rights
reserved.
</footer>

<aside class="control-sidebar control-sidebar-dark"></aside>
<ul class="navbar-nav">
<li class="nav-item">
</li>
</ul>

<ul class="navbar-nav ml-auto">
<div class="navbar-search-block">
<form class="form-inline">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search"
            aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
</form>
</div>
</li>

<li class="nav-item dropdown">
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
    </a>
</div>
</li>
</ul>




<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/chart.js/Chart.min.js"></script>

<script src="plugins/sparklines/sparkline.js"></script>

<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>

<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="plugins/summernote/summernote-bs4.min.js"></script>

<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="dist/js/adminlte.js?v=3.2.0"></script>

<script src="dist/js/demo.js"></script>

<script src="dist/js/pages/dashboard.js"></script>
@endsection
