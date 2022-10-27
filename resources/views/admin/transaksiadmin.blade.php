@extends('layouts.template')

@section('title', 'Transaksi')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Layanan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Transaksi</h2>
                <p> Transaksi Karisma Laundry Kota Malang </p>
                <div class="row">
                    <!-- simple table -->
                    <div class="container-fluid">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Pesanan</h5>
                                <p class="card-text">Daftar Pesanan </p>
                                <table class="table table-hover mt-4">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Outlet</th>
                                            <th>Kode Invoice</th>
                                            <th>Nama</th>
                                            <th>Tanggal Pemberian</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Karisma Klojen</td>
                                            <td>KO001</td>
                                            <td>Ari Gunawan</td>
                                            <td>Apr 24, 2019</td>
                                            <td>Apr 24, 2019</td>
                                            <td><span class="badge badge-pill badge-warning">Selesai</span></td>
                                            <td>Apr 24, 2019</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endsection
