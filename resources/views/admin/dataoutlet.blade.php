@extends('layouts.template')

@section('title', 'Data Outlet')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Outlet</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Data Outlet</h2>
                <p> Data Outlet Karisma Laundry Kota Malang </p>
                <div class="row">
                    <!-- simple table -->
                    <div class="container-fluid">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Outlet</h5>
                                <p class="card-text">Daftar Outlet Karisma Laundry </p>
                                <a href="{{ route('dataoutlet.create') }}" class="btn btn-primary">Tambah Data</a>
                                <a href="/export" class="btn btn-warning"><i class="fe fe-printer"></i></a>
                                <div class="mt-3">
                                    <table class="table table-hover mt-4" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Outlet</th>
                                                <th>Alamat</th>
                                                <th>Telepon</th>
                                                <th>Email</th>
                                                <th>Foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($outlet as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama_outlet }}</td>
                                                    <td>{{ $item->alamat_outlet }}</td>
                                                    <td>{{ $item->telepon_outlet }}</td>
                                                    <td>{{ $item->email_outlet }}</td>
                                                    <td><img src="{{ asset('storage/' . $item->upload) }}" width="100px"
                                                            alt="" srcset=""></td>
                                                    <td>
                                                        <div class="file-action">
                                                            <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="text-muted sr-only">Action</span>
                                                            </button>
                                                            <div class="dropdown-menu m-2">
                                                                <a class="dropdown-item" href="{{ route('dataoutlet.show', $item->id) }}"><i class="fe fe-archive fe-12 mr-4"></i>Detail</a>
                                                                <a class="dropdown-item" href="{{ route('dataoutlet.edit', $item->id) }}"><i class="fe fe-edit fe-12 mr-4"></i>Edit</a>
                                                                <form action="{{ route('dataoutlet.destroy', $item->id) }}" method="POST" id="myForm">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a class="dropdown-item" href="#" id="submitdel" onclick="return confirm('Yakin hapus Data ?')"><i class="fe fe-trash fe-12 mr-4"></i>Delete</a>
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
