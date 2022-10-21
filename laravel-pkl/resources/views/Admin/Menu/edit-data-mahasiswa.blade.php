@extends('Admin.Layout.master')

@section('content')
    <div class="container">
        <h1>Edit Data</h1>

        <form action="/data-mahasiswa/{{ $mahasiswa->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <input type="text" name="nim" class="form-control" placeholder="Nim" value="{{ $mahasiswa->nim }}">
            </div>
            <div class="mb-3">
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $mahasiswa->nama }}">
            </div>
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="laki-laki" @if ($mahasiswa->jenis_kelamin == 'laki-laki') selected @endif>Laki-laki</option>
                <option value="perempuan" @if ($mahasiswa->jenis_kelamin == 'perempuan') selected @endif>Perempuan</option>
            </select><br>

            <div class="mb-3">
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir"
                    value="{{ $mahasiswa->tanggal_lahir }}"><br>
            </div>
            <div class="mb-3">
                <input type="datetime" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir"
                    value="{{ $mahasiswa->tanggal_lahir }}"><br>
            </div>
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username"
                    value="{{ $mahasiswa->username }}"><br>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
        </form>
    </div>
@endsection
