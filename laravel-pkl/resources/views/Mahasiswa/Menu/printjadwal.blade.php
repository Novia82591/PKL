<!DOCTYPE html>
<html>

<head>
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('/template/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset ('/template/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset ('/template/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->

  <style>
    #example2 {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #example2 td,
    #example2 th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #example2 tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #example2 tr:hover {
      background-color: #ddd;
    }

    #example2 th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #0292eb;
      color: white;
    }
  </style>
</head>

<body>

<script>
  window.print();
</script>

  <center>
    <h1>JADWAL SEMINAR JUDUL</h1>
    <h3>PROGRAM STUDI TEKNIK INFORMATIKA</h3>
    <h3>FAKULTAS TEKNIK</h3>
    <h3>UNIVERSITAS MUHAMMADIYAH BANJARMASIN</h3>

  </center>


  <table id="example2">
    <thead>
      <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Judul</th>
        <th>Hari/Tanggal</th>
    </tr>
    </thead>
    @foreach ($jadwal as $b)
    <tbody>
    <tr>
        <td>{{ $b->nim }}</td>
        <td>{{ $b->nama }}</td>
        <td>{{ $b->judul }}</td>
        <td>{{ $b->tanggal }}</td>
    </tr>
    </tbody>
    @endforeach
  </table>




  <script src="{{asset ('/template/adminlte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->

  <!-- DataTables  & Plugins -->
  <script src="{{asset ('/template/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset ('/template/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>

  <script>
  </script>
</body>

</html>