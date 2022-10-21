@extends('Admin.Layout.master')

@section('content')
    @include('Admin.Layout.navbar')
    @include('Admin.Layout.sidebar')


    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Mahasiswa</h1>
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
                                    <a href="{{ url('tambah-data-mahasiswa') }}" class="btn btn-primary"><i
                                            class="fas fa-plus-square"></i></a>
                                </span>
                            </div>

                            <div class="card-body">
                                <div class="container">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>NAMA</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>TEMPAT LAHIR</th>
                                            <th>TANGGAL LAHIR</th>
                                            <th>USERNAME</th>
                                            <th>AKSI</th>
                                        </tr>
                                        @foreach ($mahasiswa as $mhs)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $mhs->nim }}</td>
                                                <td>{{ $mhs->nama }}</td>
                                                <td>{{ $mhs->jenis_kelamin }}</td>
                                                <td>{{ $mhs->tempat_lahir }}</td>
                                                <td>{{ $mhs->tanggal_lahir }}</td>
                                                <td>{{ $mhs->username }}</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">

                                                        <a href="/data-mahasiswa/{{ $mhs->id }}/edit" class="btn btn-sm  mr-2 btn-warning">Edit</a>

                                                        <form action="/data-mahasiswa/{{ $mhs->id }}" method="POST">
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

            </div>
        </li>
    </ul>
    @include('Admin.Layout.footer')
    @include('Admin.Layout.script')
@endsection
