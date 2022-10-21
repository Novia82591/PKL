@extends('Admin.Layout.master')

@section('content')
    @include('Admin.Layout.navbar')
    @include('Admin.Layout.sidebar')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Dosen</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">

                                <span style="float: right">
                                    <a href="{{ url('tambah-data-dosen') }}" class="btn btn-primary"> <i
                                            class="fas fa-plus-square"></i></a>
                                </span>
                            </div>


                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <tr>
                                        <th>No</th>
                                        <th>NIDN</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>tanggal_lahir</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($dosen as $d)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->nidn }}</td>
                                            <td>{{ $d->nama }}</td>
                                            <td>{{ $d->jenis_kelamin }}</td>
                                            <td>{{ $d->tanggal_lahir }}</td>
                                            <td>{{ $d->username }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="/data-dosen/{{ $d->id }}/edit" class="btn btn-sm  mr-2 btn-warning">Edit</a>
                                                <form action="/data-dosen/{{ $d->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="btn btn-danger" value="Hapus">
                                            
                                            </form>
                                            </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>
    @include('Admin.Layout.footer')
    @include('Admin.Layout.script')
@endsection
