@extends('Admin.Layout.master')

@section('content')
    <div class="container">
        <h1>Edit Data</h1>

        <form action="/jadwal-seminar/{{ $jadwal->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label>Nim</label><br>
                <input type="text" name="nim" class="form-control" value="{{ $jadwal->nim }}">
            </div>
            <label>Nama</label><br>
            <input type="text" name="nama" class="form-control" value="{{ $jadwal->nama }}"><br>
            <label>Judul</label><br>
            <input type="text" name="judul" class="form-control" value="{{ $jadwal->judul }}"><br>
            <label>Hari/Tanggal</label><br>
            <input type="date" name="tanggal" class="form-control" value="{{ $jadwal->tanggal }}"><br>
            <input type="submit" name="submit" value="Simpan">

        </form>
    </div>
@endsection
