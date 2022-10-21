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
              <h1>Pendaftaran Tugas Akhir</h1>
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
                  <form method="get" action="#" class="form" id="simple_form">
                    <div class="content controls">
                      <div class="form-row">
                        <div class="col-md-2">Semester</div>
                        <div class="col-md-9-mb-10">
                          <select name="semester">
                            <option value="ganjil">Ganjil</option>
                            <option value="genap">Genap</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-2 mt-2">Tahun</div>
                        <div class="col-md-2 mt-2">
                          <select name="created_at" id="created_at">
                            <option value="2020">2020/2021</option>
                            <option value="2021">2021/2022</option>
                            <option value="2022">2022/2023</option>
                            <option value="2023">2023/2024</option>
                            <option value="2024">2024/2025</option>
                            <option value="2025">2025/2026</option>
                          </select>
                        </div>
                      </div>

                    </div>
                    <br>
                    <div class="content controls">
                      <div class="footer tar pull-right mt-20">
                        <div class="btn-group mt-10">
                          <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                      </div>
                    </div>
                  </form>

                  <span style="float: right">
                    <a href="#" class="btn btn-sm mr-3  btn-danger">Ditolak </a>
                  </span>
                  <span style="float: right">
                    <a href="#" class="btn btn-sm mr-3  btn-info">Direvisi </a>
                  </span>
                  <span style="float: right">
                    <a href="#" class="btn btn-sm mr-3  btn-success">Disetujui </a>
                  </span>
                  <span style="float: right">
                    <a href="#" class="btn btn-sm mr-3 btn-secondary">Menunggu </a>
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
                        <th>Persyaratan</th>
                        <th>Proposal</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                            
                        
                      <tr>
                        <td>1955201110016</td>
                        <td>Novia</td>
                        <td>Sistem Informasi</td>
                        <td>
                          <center>
                            <a href="#" id="download" class="btn btn-sm btn-primary"><i class="fas fa-file-pdf"> view</i></a>
                          </center>
                        </td>
                        <td>
                          <center>
                            <a href="#" id="download" class="btn btn-sm btn-primary"><i class="fas fa-file-pdf"> view</i></a>
                          </center>
                        </td>
                        <td>Belum Divalidasi</td>
                        <td>2022-07-31
                          14:32:40</td>
                        <td>
                          <center><a href="#" class="btn btn-success btn-sm "><i class="far fa-sticky-note"> Note</i></a></center>
                        </td>
                        <td><a href="#" class="btn btn-xs btn-success">Setujui</a>
                          <a href="#" class="btn btn-xs btn-info">Revisi</a>
                          <a href="#" class="btn btn-xs btn-danger">Tolak</a>
                        </td>
                      </tr>
                      
                    <tbody>



                      </tfoot>
                  </table>
                </div>

              </div>

            </div>

          </div>

        </div>

      </section>



  @include('Admin.Layout.script')
  @endsection
  