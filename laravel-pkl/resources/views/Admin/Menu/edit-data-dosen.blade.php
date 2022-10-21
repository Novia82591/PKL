@extends('Admin.Layout.master')

@section('content')
    <div class="container">
        <h1>Edit Data</h1>

        <form action="/data-dosen/{{ $dosen->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label>NIDN</label><br>
                <input type="text" name="nidn" class="form-control" value="{{ $dosen->nidn }}">
            </div>
            <div class="mb-3">
                <label>NAMA</label><br>
                <input type="text" name="nama" class="form-control"  value="{{ $dosen->nama }}">
            </div>
            <label>JENIS KELAMIN</label><br>
            <select class="form-control" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="laki-laki" @if ($dosen->jenis_kelamin == 'laki-laki') selected @endif>Laki-laki</option>
                <option value="perempuan" @if ($dosen->jenis_kelamin == 'perempuan') selected @endif>Perempuan</option>
            </select><br>

            <div class="mb-3">
                <label>TANGGAL LAHIR</label><br>
                <input type="datetime" name="tanggal_lahir" class="form-control" 
                    value="{{ $dosen->tanggal_lahir }}"><br>
            </div>
            <div class="mb-3">
                <label>USERNAME</label><br>
                <input type="text" name="username" class="form-control" 
                    value="{{ $dosen->username }}"><br>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
        </form>
    </div>
@endsection
