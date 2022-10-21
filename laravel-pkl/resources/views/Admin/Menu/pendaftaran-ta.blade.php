<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset ('/template/frontend/images/logo.png')}}" type="image/x-icon">
  <title>Sistem Informasi Tugas Akhir</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

  <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">

  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <script nonce="170010a6-f658-4982-a613-c1d11b97fff7">
    (function(w, d) {
      ! function(a, e, t, r) {
        a.zarazData = a.zarazData || {};
        a.zarazData.executed = [];
        a.zaraz = {
          deferred: []
        };
        a.zaraz.q = [];
        a.zaraz._f = function(e) {
          return function() {
            var t = Array.prototype.slice.call(arguments);
            a.zaraz.q.push({
              m: e,
              a: t
            })
          }
        };
        for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
        a.zaraz.init = () => {
          var t = e.getElementsByTagName(r)[0],
            z = e.createElement(r),
            n = e.getElementsByTagName("title")[0];
          n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
          a.zarazData.x = Math.random();
          a.zarazData.w = a.screen.width;
          a.zarazData.h = a.screen.height;
          a.zarazData.j = a.innerHeight;
          a.zarazData.e = a.innerWidth;
          a.zarazData.l = a.location.href;
          a.zarazData.r = e.referrer;
          a.zarazData.k = a.screen.colorDepth;
          a.zarazData.n = e.characterSet;
          a.zarazData.o = (new Date).getTimezoneOffset();
          a.zarazData.q = [];
          for (; a.zaraz.q.length;) {
            const e = a.zaraz.q.shift();
            a.zarazData.q.push(e)
          }
          z.defer = !0;
          for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => {
            try {
              a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
            } catch {
              a.zarazData["z_" + t.slice(7)] = e.getItem(t)
            }
          }));
          z.referrerPolicy = "origin";
          z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
          t.parentNode.insertBefore(z, t)
        };
        ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
      }(w, d, 0, "script");
    })(window, document);
  </script>
</head>

@include('Admin.Layout.navbar')
@include('Admin.Layout.sidebar')

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Pendaftaran Tugas Akhir</h1>
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
                    
                  </form>
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
                        <th>Makalah</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($file as $f)
                          
                      
                      <tr>
                        <td>{{ $f->nim }}</td>
                        <td>{{ $f->nama }}</td>
                        <td>{{ $f->judul }}</td>
                        <td>
                          <center>
                            <a href="file/{{ $f->persyaratan }}" id="download" class="btn btn-sm btn-primary"><i class="fas fa-file-pdf"> view</i></a>
                          </center>
                        </td>
                        <td>
                          <center>
                            <a href="file/{{ $f->makalah }}" id="download" class="btn btn-sm btn-primary"><i class="fas fa-file-pdf"> view</i></a>
                          </center>
                        </td>
                      
                        <td>{{ $f->tanggal }}</td>
                        <td>
                          <center><a href="#" class="btn btn-success btn-sm "><i class="far fa-sticky-note"> Note</i></a></center>
                        </td>
                        <td><a href="#" class="btn btn-xs btn-success">Setujui</a>
                          <a href="#" class="btn btn-xs btn-info">Revisi</a>
                          <a href="#" class="btn btn-xs btn-danger">Tolak</a>
                        </td>
                        <td>{{ $f->status }}</td>
                      </tr>
                      @endforeach
                    <tbody>



                      </tfoot>
                  </table>
                </div>

              </div>

            </div>

          </div>

        </div>

      </section>

     
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>create &copy; 2022 <a href="https://yanuar.sr">Yanuar.SR and Novia</a>.</strong> All rights reserved.
  </footer>

  <aside class="control-sidebar control-sidebar-dark">

  </aside>

  <ul class="navbar-nav">
    <li class="nav-item">

    </li>
  </ul>

  <ul class="navbar-nav ml-auto">


    <div class="navbar-search-block">
      <form class="form-inline">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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


  </ul>
  </nav>







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
</body>

</html>