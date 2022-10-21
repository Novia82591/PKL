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
              <h1>Tugas Akhir</h1>
            </div>
            <div class="col-sm-6">
              
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
                <h3 class="card-title">Data Mahasiswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    @foreach ($validasi as $q)
                    <tbody>
                      <tr>
                        <td>{{ $q->nim }}</td>
                        <td>{{ $q->nama }}</td>
                        <td>{{ $q->judul }}</td>
                        <td>{{ $q->tanggal }}</td>
                        <td>{{ $q->keterangan }}</td>
                        <td>@if($q->status==0)
                          Menunggu
                          @elseif($q->status==1)
                          Di Setujui
                          @elseif($q->status==2)
                          Di Revisi
                          @elseif($q->status==3)
                          Di Tolak
                          @endif            
                      
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


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  @include('Admin.Layout.footer')
  @include('Admin.Layout.script')
  @endsection