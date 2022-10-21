@extends('Admin.Layout.master')

@section('content')
    <div class="container">
        <h1>Edit Data</h1>

        <form action="/pembimbing/{id}/edit" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <input type="text" name="nim" class="form-control" placeholder="Nim" value="">
            </div>
            <div class="mb-3">
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="">
            </div>

            <div class="mb-3">
                <input type="text" name="judul" class="form-control" placeholder="Judul"
                    value=""><br>
            </div>
            <div class="mb-3">
                <input type="datetime" name="pembimbing" class="form-control" placeholder="Pembimbing"
                    value=""><br>
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
        </form>
    </div>
@endsection
