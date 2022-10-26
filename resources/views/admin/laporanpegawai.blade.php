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
                                <table class="table table-hover mt-4">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kode Pengguna</th>
                                            <th>Posisi</th>
                                            <th>Username</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Karisma Klojen</td>
                                            <td>Enim Limited</td>
                                            <td>Malang</td>
                                            <td>Apr 24, 2019</td>
                                            <td><span class="badge badge-pill badge-warning">Hold</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endsection
