@extends('layouts.template')

@section('title', 'Data Pengguna')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Pengguna</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Data Pengguna</h2>
                <p> Data Pengguna Bisa Bertambah jika Pengguna sudah menambahkan Detail Profil</p>
                <div class="row">
                    <!-- simple table -->
                    <div class="container-fluid">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Pengguna</h5>
                                <p class="badge badge-danger">Data Pengguna Bisa Bertambah jika Pengguna sudah menambahkan Detail profil</p>
                                <div class="">
                                    <a href="{{ route('datapengguna.create') }}" class="btn btn-primary">Tambah Data</a>
                                </div>
                                    <div class="mt-3">
                                    <table class="table table-hover mt-4" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Posisi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><img src="{{ asset('storage/' . $item->image) }}" width="100px"
                                                            srcset=""></td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->role_name }}</td>
                                                    <td>
                                                        <div class="file-action">
                                                            <button type="button"
                                                                class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted sr-only">Action</span>
                                                            </button>
                                                            <div class="dropdown-menu m-2">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('datapengguna.show', $item->id) }}"><i
                                                                        class="fe fe-archive fe-12 mr-4"></i>Detail</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('datapengguna.edit', $item->id) }}"><i
                                                                        class="fe fe-edit fe-12 mr-4"></i>Edit</a>
                                                                <form
                                                                    action="{{ route('datapengguna.destroy', $item->id) }}"
                                                                    method="POST" id="myForm">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a class="dropdown-item" href="#" id="submitdel"
                                                                        onclick="return confirm('Yakin hapus Data ?')"><i
                                                                            class="fe fe-trash fe-12 mr-4"></i>Delete</a>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection
