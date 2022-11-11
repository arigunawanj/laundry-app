@extends('layouts.template')

@section('title', 'Laporan Pegawai')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Laporan Pegawai</li>
        </ol>
    </nav>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Laporan Pegawai</h2>
                <p> Laporan Pegawai Karisma Laundry Kota Malang </p>
                <div class="row">
                    <!-- simple table -->
                    <div class="container-fluid">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Laporan Pegawai</h5>
                                <p class="card-text">Laporan Pegawai Karisma Laundry </p>
                                <a href="{{ route('laporanpegawai.create') }}" class="btn btn-primary">Tambah Data</a>
                                <table class="table table-hover mt-4">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama User</th>
                                            <th>Nama Outlet</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($outletuser as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->user->name}}</td>
                                            <td>{{ $item->outlet->nama_outlet }}</td>
                                            <td class="d-flex">
                                                <form action="{{ route('laporanpegawai.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger ml-2" onclick="return confirm('Yakin hapus Data ?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endsection
