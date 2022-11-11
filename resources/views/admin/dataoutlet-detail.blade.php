@extends('layouts.template')

@section('title', 'Detail Data Outlet')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Data</a></li>
            <li class="breadcrumb-item"><a href="/dataoutlet">Data Outlet</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data Outlet</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Detail Data Outlet</h2>
                <p> Detail Data Outlet Karisma Laundry Kota Malang </p>
                <div class="row">
                    <!-- simple table -->
                    <div class="container-fluid">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Detail Outlet <span class="text-primary">{{ $outlet->nama_outlet }} </span></h5>
                                <p class="card-text">Anda sedang melihat Data outlet dari <span class="text-primary">{{ $outlet->nama_outlet }} </span></p>
                                <div class="mt-3">
                                    <table class="table table-hover mt-4">
                                        <thead>
                                            <tr>
                                                <th class="text-dark"><strong>Detail</strong></th>
                                                <th class="text-dark"><strong>Isi Data</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>Nama Outlet</td>
                                                    <td>{{ $outlet->nama_outlet }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>{{ $outlet->alamat_outlet }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Telepon</td>
                                                    <td>{{ $outlet->telepon_outlet }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>{{ $outlet->email_outlet }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kecamatan</td>
                                                    <td>{{ $outlet->kecamatan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kelurahan</td>
                                                    <td>{{ $outlet->kelurahan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pegawai</td>
                                                    <td>{{ $outlet->user->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Foto</td>
                                                    <td><img src="{{ asset('storage/' . $outlet->upload) }}" width="100px"
                                                        alt="" srcset=""></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                    <a href="/dataoutlet" class="btn btn-success">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>


@endsection