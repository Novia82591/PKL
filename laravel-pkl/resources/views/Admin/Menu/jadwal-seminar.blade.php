@extends('Admin.Layout.master')

@section('content')

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
              <div class="box box-warning">
                <div class="box-header" style="margin-bottom:24px">
                  <a href="#" target="_blank" class="btn btn-primary btn-flat alert-danger"><i class="fa fa-file"></i> Cetak PDF</a>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Seminar Judul</h3>
                    <span style="float: right">
                      <a href="/tambah-jadwal-seminar" class="btn btn-primary"><i
                              class="fas fa-plus-square"></i></a>
                  </span>


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
                          <th>Action</th>
                        </tr>
                        @foreach ($jadwal as $j)
                        <tr>
                          
                          <td>{{ $j->nim }}</td>
                          <td>{{ $j->nama }}</td>
                          <td>{{ $j->judul }}</td>
                          <td>{{ $j->tanggal }}</td>
                          <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-sm  mr-2 btn-warning" href="/jadwal-seminar/{{ $j->id }}/edit">Edit</a>
                            <form action="/jadwal-seminar/{{ $j->id }}" method="POST">
                              @csrf
                              @method('delete')
                              <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                            </div>
                          </td>
                        </tr>
                        @endforeach

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


  </div>
  @include('Admin.Layout.footer')
  @include('Admin.Layout.script')
  @endsection