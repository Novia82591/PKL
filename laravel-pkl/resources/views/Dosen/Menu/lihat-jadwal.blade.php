@extends('Dosen.Layout.master')

@section('content')
    <!-- Navbar -->
    @include('Admin.Layout.navbar')
        @include('Admin.Layout.sidebar')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Jadwal Seminar</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Hari/Tanggal</th>
                      </tr>
                    </thead>
                    @foreach ($jadwal as $k)
                    <tbody>
                      <tr>
                        <td>{{ $k->nim }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->judul }}</td>
                        <td>{{ $k->tanggal }}</td>
                      </tr>
                    </tbody>
                    @endforeach
                    <tfoot>

                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('Admin.Layout.footer')
    @include('Admin.Layout.script')
    @endsection