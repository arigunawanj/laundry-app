@extends('layouts.template')

@section('title', 'Laporan Transaksi')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Laporan Transaksi</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Laporan Transaksi</h2>
                <p> Laporan Transaksi Karisma Laundry Kota Malang </p>
                <div class="row">
                    <!-- simple table -->
                    <div class="container-fluid">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Laporan Transaksi</h5>
                                <p class="card-text">Laporan Transaksi Karisma Laundry </p>
                                <a href="/laporantransaksi-add" class="btn btn-primary mb-4 ">Tambah Data</a>
                                <table class="table table-hover mt-5" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Outlet</th>
                                            <th>Kode Invoice</th>
                                            <th>Pelanggan</th>
                                            <th>Tanggal bayar</th>
                                            <th>Total Bayar</th>
                                            <th>Pegawai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Karisma Klojen</td>
                                            <td>Enim Limited</td>
                                            <td>Malang</td>
                                            <td>Apr 24, 2019</td>
                                            <td>Apr 24, 2019</td>
                                            <td><span class="badge badge-pill badge-warning">Hold</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endsection
